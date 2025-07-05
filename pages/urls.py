# pages/urls.py
from django.urls import path
from .views import home_view

urlpatterns = [
    # La ruta vacía ('') es la raíz de esta app. 
    # Le damos el nombre 'home' para poder referenciarla fácilmente.
    path('', home_view, name='home'),
]