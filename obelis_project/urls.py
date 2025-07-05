# obelis_project/urls.py
from django.contrib import admin
from django.urls import path, include # Asegúrate de que 'include' esté importado

urlpatterns = [
    path('admin/', admin.site.urls),
    # Le dice a Django: para la ruta principal, busca las reglas en pages.urls
    path('', include('pages.urls')),
    path('convert-img/', include('convert_img.urls')),
    path('edit-img/', include('edit_img.urls')),
    path('ia-audio/', include('ia_audio.urls')),
    path('ia-text/', include('ia_text.urls')),
    path('ia-img/', include('ia_img.urls')),
]