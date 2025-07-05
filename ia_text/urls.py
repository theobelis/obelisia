# ia_img/urls.py
from django.urls import path
from .views import image_generator_view

urlpatterns = [
    path('', image_generator_view, name='ia_img_home'),
]