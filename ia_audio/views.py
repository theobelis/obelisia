# ia_audio/views.py
from django.shortcuts import render

def ia_audio_view(request):
    return render(request, 'ia_audio/audio.html')