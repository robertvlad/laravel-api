<h1>Nuovo contatto inserito</h1>

<p>
    Nome: {{ $lead->name }}<br>
    Cognome: {{ $lead->surname }}<br>
    Telefono: {{ $lead->phone }}<br>
    Email: {{ $lead->email }}<br>
    Contenuto:<br>
    {{ $lead->message }}
</p>