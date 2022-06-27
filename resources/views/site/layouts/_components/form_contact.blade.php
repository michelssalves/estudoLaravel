{{ $slot }}

<form action="{{ route('site.contact')}}" method="POST">
    @csrf
    <input name="name" type="text" placeholder="Name" class="{{ $class }}">
    <br>
    <input name="phone" type="text" placeholder="Phone" class="{{ $class }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $class }}">
    <br>
    <select class="{{ $class }}">
        <option value="">What is the reason for contact</option>
        <option value="1">Doubt</option>
        <option value="2">Praise</option>
        <option value="3">Complaint</option>
    </select>
    <br>
    <textarea name="message" class="{{ $class }}">Fill your message here</textarea>
    <br>
    <button type="submit" class="{{ $class }}">SUBMIT</button>
</form>