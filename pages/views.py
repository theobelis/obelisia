# pages/views.py

from django.shortcuts import render

def home_view(request):
  """
  Esta vista simplemente renderiza y muestra nuestra plantilla home.html.
  """
  context = {} # Un diccionario para pasar datos al template en el futuro
  return render(request, 'pages/home.html', context)