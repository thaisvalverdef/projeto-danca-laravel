@component('mail::message')
# Obrigada por entrar em contato com um dos professores do Dança Em Casa!

<strong>Nome</strong> {{$emaildata['name']}}
<strong>E-mail</strong> {{$emaildata['email']}}

<strong>Mensagem</strong> 

{{$emaildata['message']}}
@endcomponent
