@if($data['datafrom'] == 'contact')

<h1>Hi, New Enquiry From {{ $data['name']}}</h1>
<p>Website : {{ $data['website']}}</p>
<p>Email : {{ $data['email']}}</p>
<p>Comments : {{ $data['comment']}}</p>

@elseif($data['datafrom'] == 'requestcallback')

<h1>Hi, New Rquest Call Back From {{ $data['name']}}</h1>

<p>Email : {{ $data['email']}}</p>
<p>Subject : {{ $data['subject']}}</p>
<p>Message : {{ $data['message']}}</p>
@else

<h1>Hi, New Quote From {{ $data['name']}}</h1>

<p>Email : {{ $data['email']}}</p>
<p>phone : {{ $data['phone']}}</p>
<p>Business Type : {{ $data['businesstype']}}</p>

@endif