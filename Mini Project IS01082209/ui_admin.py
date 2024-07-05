import customtkinter as ctkt
from datetime import datetime
from PIL import Image
from function_admin import edit_customer_admin, view_customer_admin, edit_room_admin, view_room_admin, delete_customer_admin, generate_reports
# (edit customer, view customer, delete customer data, view room , view report, exit )
from music import *

def admin_interface():
    def office_interface():
        selected_option = option_var.get()
        print(f"Selected option: {selected_option}")
        if selected_option == "option1":
            edit_customer_admin()
        elif selected_option == "option2":
            view_customer_admin()
        elif selected_option == "option3":
            delete_customer_admin()
        elif selected_option == "option4":
            edit_room_admin()
        elif selected_option == "option5":
            view_room_admin()
        elif selected_option == "option6":
            generate_reports()
        elif selected_option == "option7":
            app.destroy()

    def update_time():
        now = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        date_time_label.configure(text=f"Date & Time: {now}")
        date_time_label.after(1000, update_time)

    app = ctkt.CTk()
    app.geometry("700x500")
    app.title("Admin Interface")

    now = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    date_time_label = ctkt.CTkLabel(master=app, text=f"Date & Time: {now}")
    date_time_label.pack(pady=10)
    update_time()

    frame = ctkt.CTkFrame(master=app)
    frame.pack(pady=20)

    global option_var
    option_var = ctkt.StringVar(value="option1")

    radio_button1 = ctkt.CTkRadioButton(
        master=frame, text="Edit Customer Information", variable=option_var, value="option1",command=play_click
    )
    radio_button2 = ctkt.CTkRadioButton(
        master=frame, text="View Customer Information", variable=option_var, value="option2",command=play_click
    )
    radio_button3 = ctkt.CTkRadioButton(
        master=frame, text="Delete Customer Information", variable=option_var, value="option3",command=play_click
    )
    radio_button4 = ctkt.CTkRadioButton(
        master=frame, text="Edit Room Status", variable=option_var, value="option4",command=play_click
    )
    radio_button5 = ctkt.CTkRadioButton(
        master=frame, text="View Room Status", variable=option_var, value="option5",command=play_click
    )
    radio_button6 = ctkt.CTkRadioButton(
        master=frame, text="View Report", variable=option_var, value="option6",command=play_click
    )
    radio_button7 = ctkt.CTkRadioButton(
        master=frame, text="Exit", variable=option_var, value="option7",command=play_click
    )

    radio_button1.pack(pady=5, anchor="w")
    radio_button2.pack(pady=5, anchor="w")
    radio_button3.pack(pady=5, anchor="w")
    radio_button4.pack(pady=5, anchor="w")
    radio_button5.pack(pady=5, anchor="w")
    radio_button6.pack(pady=5, anchor="w")
    radio_button7.pack(pady=5, anchor="w")


    proceed_button = ctkt.CTkButton(master=app, text="Proceed", command=(lambda: (office_interface(), play_click())))
    proceed_button.pack(pady=20)

   #explore image
    gif_img = Image.open("example2.gif")
    frames = []
    try:
        while True:
            frame = gif_img.copy().resize((200, 200))
            frames.append(ctkt.CTkImage(dark_image=frame, size=(200, 200)))
            gif_img.seek(len(frames))  
    except EOFError:
        pass  

    if frames:
        gif_label = ctkt.CTkLabel(master=app, text="", image=frames[0])
        gif_label.pack(pady=20)

        def update_gif(frame_index):
            frame = frames[frame_index]
            gif_label.configure(image=frame)
            app.after(100, update_gif, (frame_index + 1) % len(frames))

        update_gif(0)
    app.mainloop()

admin_interface()