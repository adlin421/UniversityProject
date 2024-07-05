import pygame

pygame.mixer.init()

click_sound = pygame.mixer.Sound("click.wav")
click_sound2 = pygame.mixer.Sound("error.wav")
click_sound3 = pygame.mixer.Sound("success.wav")
pygame.mixer.music.load("background.mp3")
pygame.mixer.music.set_volume(0.0)

pygame.mixer.music.play(-1)

def play_click():
    click_sound.play()

def play_error():
    click_sound2.play()

def play_success():
    click_sound3.play()