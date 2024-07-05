import tkinter as tk
from tkinter import messagebox
import customtkinter as ctk
from openpyxl import load_workbook
from function_customer import display_facility_schedule, edit_customer_status
from PIL import Image, ImageSequence
from datetime import datetime
from music import *


def display_gif(window, gif_path, label_text):
    gif_img = Image.open(gif_path)
    frames = [ctk.CTkImage(frame.copy().resize((200, 200)), size=(200, 200)) for frame in ImageSequence.Iterator(gif_img)]

    if frames:
        gif_label = ctk.CTkLabel(window, text=label_text, image=frames[0])
        gif_label.pack(pady=20)

        def update_gif(frame_index):
            frame = frames[frame_index]
            gif_label.configure(image=frame)
            window.after(100, update_gif, (frame_index + 1) % len(frames))

        update_gif(0)

def customer_interface():
    def handle_selection():
        selection = radio_var.get()
        if selection == "Display Schedule":
            display_facility_schedule()
        elif selection == "Edit Status":
            edit_customer_status()
        elif selection == "Exit":
            customer_window.destroy()

    customer_window = ctk.CTk()
    customer_window.geometry("700x500")
    customer_window.title("Customer Interface")

    ctk.CTkLabel(customer_window, text="Welcome to the Customer Section!", font=("Arial", 20)).pack(pady=20)

    current_time_label = ctk.CTkLabel(customer_window, text="", font=("Arial", 12))
    current_time_label.pack()

    def update_time():
        current_time = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        current_time_label.configure(text=f"Current Time: {current_time}")
        current_time_label.after(1000, update_time)

    update_time()

    radio_var = tk.StringVar(value="Display Schedule")

    display_schedule_radio = ctk.CTkRadioButton(customer_window, text="Display Facility Schedule", variable=radio_var, value="Display Schedule",command=play_click)
    display_schedule_radio.pack(pady=5)

    edit_status_radio = ctk.CTkRadioButton(customer_window, text="Self Check-In/Check-Out", variable=radio_var, value="Edit Status",command=play_click)
    edit_status_radio.pack(pady=5)

    exit_radio = ctk.CTkRadioButton(customer_window, text="Exit", variable=radio_var, value="Exit",command=play_click())
    exit_radio.pack(pady=5)

    select_button = ctk.CTkButton(customer_window, text="Select", command=(lambda: (handle_selection(), play_click())))
    select_button.pack(pady=20)

    display_gif(customer_window, "example3.gif", "")

    customer_window.mainloop()