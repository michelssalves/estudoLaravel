{{ $slot }}

<form action="{{ route('site.contact')}}" method="POST">
    @csrf
    <input name="name" value="{{ old('name')}}" type="text" placeholder="Name" class="{{ $class }}">
    <br>
    <input name="phone" value="{{ old('phone')}}" type="text" placeholder="Phone" class="{{ $class }}">
    <br>
    <input name="email" value="{{ old('email')}}" type="text" placeholder="E-mail" class="{{ $class }}">
    <br>

    <select name="reason_contact_id" class="{{ $class }}">
        <option value="">What is the reason for contact</option>
        @foreach ($reason_for_contact as $key => $item)
        <option value="{{$item->id}}" {{ old('reason_contact_id') == $item->id ? 'selected' : ''}}>{{ $item->reason_contact }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="message" class="{{ $class }}">{{ (old('message') != '') ? old('message'): 'Fill your message here' }}</textarea>
    <br>
    <button type="submit" class="{{ $class }}">SUBMIT</button>
</form>

<div style="position:absolute; top:0px; left:0px; width:100%; background:red">
    <pre>
        {{ print_r($errors) }}
    </pre>    
</div>