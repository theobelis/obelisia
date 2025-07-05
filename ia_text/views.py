# ia_img/views.py
from django.shortcuts import render

def image_generator_view(request):
    return render(request, 'ia_img/generator.html')