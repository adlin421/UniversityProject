import tkinter as tk
from tkinter import messagebox
import customtkinter as ctk
from datetime import datetime
from ui_management import management_interface
from ui_admin import admin_interface
from ui_customer import customer_interface
from music import *

valid_credentials = {
    "Management Staff": {"username": "staff", "password": "staff123"},
    "Admin Staff": {"username": "admin", "password": "admin123"}
}

def login():
    def perform_login():
        username = username_entry.get()
        password = password_entry.get()
        staff_type = staff_type_var.get()

        if username == valid_credentials[staff_type]["username"] and password == valid_credentials[staff_type]["password"]:
            play_click()
            login_window.destroy()
            
            if staff_type == "Management Staff":
                management_interface()
            elif staff_type == "Admin Staff":
                admin_interface()
        else:
            play_error()
            messagebox.showerror("Login Failed", "Invalid username or password. Please try again.")

    login_window = ctk.CTk()
    login_window.geometry("700x500")
    login_window.title("Worker Login Interface")

    ctk.set_appearance_mode("dark")  
    ctk.set_default_color_theme("blue")  

    welcome_label = ctk.CTkLabel(login_window, text="Welcome to the Company Portal", font=("Arial", 20))
    welcome_label.pack(pady=20)

    time_label = ctk.CTkLabel(login_window, text="", font=("Arial", 12))
    time_label.pack()

    def update_time():
        current_time = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        time_label.configure(text=f"Current Time: {current_time}")
        time_label.after(1000, update_time)

    update_time()

    username_label = ctk.CTkLabel(login_window, text="Username:", font=("Arial", 14))
    username_label.pack(pady=5)
    username_entry = ctk.CTkEntry(login_window, placeholder_text="Enter your username", width=200)
    username_entry.pack(pady=5)

    password_label = ctk.CTkLabel(login_window, text="Password:", font=("Arial", 14))
    password_label.pack(pady=5)
    password_entry = ctk.CTkEntry(login_window, placeholder_text="Enter your password", width=200, show='*')
    password_entry.pack(pady=5)

    staff_type_label = ctk.CTkLabel(login_window, text="Select your staff type:", font=("Arial", 14))
    staff_type_label.pack(pady=10)

    staff_type_var = tk.StringVar(value="Management Staff") 
    management_radio = ctk.CTkRadioButton(login_window, text="Management Staff", variable=staff_type_var, value="Management Staff", command=play_click)
    management_radio.pack(pady=5)

    admin_radio = ctk.CTkRadioButton(login_window, text="Admin Staff", variable=staff_type_var, value="Admin Staff", command=play_click)
    admin_radio.pack(pady=5)

    login_button = ctk.CTkButton(login_window, text="Login", command=perform_login)
    login_button.pack(pady=20)

    login_window.mainloop()

def choose_role():
    def open_customer_interface():
        play_click()
        role_window.destroy()
        customer_interface()

    def open_staff_login():
        play_click()
        role_window.destroy()
        login()

    role_window = ctk.CTk()
    role_window.geometry("400x350")
    role_window.title("Choose Role")

    ctk.set_appearance_mode("dark")  
    ctk.set_default_color_theme("blue")  

    role_label = ctk.CTkLabel(role_window, text="Welcome to Plaza Hotel Portal", font=("Arial", 20))
    role_label.pack(pady=10)

    current_time_label = ctk.CTkLabel(role_window, text="", font=("Arial", 12))
    current_time_label.pack()

    def update_time():
        current_time = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        current_time_label.configure(text=f"Current Time: {current_time}")
        current_time_label.after(1000, update_time)

    update_time()

    role_label = ctk.CTkLabel(role_window, text="Choose Your Role", font=("Arial", 16))
    role_label.pack(pady=20)

    customer_button = ctk.CTkButton(role_window, text="Customer", command=open_customer_interface)
    customer_button.pack(pady=10)

    staff_button = ctk.CTkButton(role_window, text="Staff", command=open_staff_login)
    staff_button.pack(pady=10)

    role_window.mainloop()

choose_role()
