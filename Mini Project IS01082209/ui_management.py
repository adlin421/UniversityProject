import customtkinter as ctkt
from datetime import datetime
from PIL import Image
from function_management import add_customer_management, view_customer_management, edit_room_management, view_room_management
from music import *

def management_interface():
    def staff_interface():
        selected_option = option_var.get()
        print(f"Selected option: {selected_option}")
        if selected_option == "option1":
            add_customer_management()
        elif selected_option == "option2":
            view_customer_management()
        elif selected_option == "option3":
            edit_room_management()
        elif selected_option == "option4":
            view_room_management()
        elif selected_option == "option5":
            app.destroy()

    def update_time():
        now = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        date_time_label.configure(text=f"Date & Time: {now}")
        date_time_label.after(1000, update_time)

    app = ctkt.CTk()
    app.geometry("700x500")
    app.title("Radio Button Interface")

    now = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    date_time_label = ctkt.CTkLabel(master=app, text=f"Date & Time: {now}")
    date_time_label.pack(pady=10)
    update_time()

    frame = ctkt.CTkFrame(master=app)
    frame.pack(pady=20)

    global option_var
    option_var = ctkt.StringVar(value="option1")

    radio_button1 = ctkt.CTkRadioButton(
        master=frame, text="Add Customer Information", variable=option_var, value="option1", command=play_click
    )
    radio_button2 = ctkt.CTkRadioButton(
        master=frame, text="View Customer Information", variable=option_var, value="option2", command=play_click
    )
    radio_button3 = ctkt.CTkRadioButton(
        master=frame, text="Edit Room Status  ", variable=option_var, value="option3", command=play_click
    )
    radio_button4 = ctkt.CTkRadioButton(
        master=frame, text="View Room Status", variable=option_var, value="option4", command=play_click
    )
    radio_button5 = ctkt.CTkRadioButton(
        master=frame, text="Exit", variable=option_var, value="option5", command=play_click
    )

    radio_button1.pack(pady=5, anchor="w")
    radio_button2.pack(pady=5, anchor="w")
    radio_button3.pack(pady=5, anchor="w")
    radio_button4.pack(pady=5, anchor="w")
    radio_button5.pack(pady=5, anchor="w")

    proceed_button = ctkt.CTkButton(master=app, text="Proceed", command=(lambda: (staff_interface(), play_click())))
    proceed_button.pack(pady=20)


    gif_img = Image.open("example.gif")
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
