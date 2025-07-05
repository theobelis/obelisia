# ia_audio/urls.py
from django.urls import path
from .views import ia_audio_view

urlpatterns = [
    path('', ia_audio_view, name='ia_audio_home'),
]