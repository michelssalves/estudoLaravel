{{ $slot }}

<form action="{{ route('site.contact')}}" method="POST">
    @csrf
    <input name="name" value="{{ old('name')}}" type="text" placeholder="Name" class="{{ $class }}">
    @if ($errors->has('name'))
        {{ $errors->first('name')}}
    @endif
    <br>
    <input name="phone" value="{{ old('phone')}}" type="text" placeholder="Phone" class="{{ $class }}">
    {{ $errors->has('phone') ? $errors->first('phone') : ''}}
    <br>
    <input name="email" value="{{ old('email')}}" type="text" placeholder="E-mail" class="{{ $class }}">
    {{ $errors->has('email') ? $errors->first('email') : ''}}
    <br>
    <select name="reason_contact_id" class="{{ $class }}">
        <option value="">What is the reason for contact</option>
        @foreach ($reason_for_contact as $key => $item)
        <option value="{{$item->id}}" {{ old('reason_contact_id') == $item->id ? 'selected' : ''}}>{{ $item->reason_contact }}</option>
        @endforeach
    </select>
    {{ $errors->has('reason_contact_id') ? $errors->first('reason_contact_id') : ''}}
    <br>
    <textarea name="message" class="{{ $class }}">{{ (old('message') != '') ? old('message'): 'Fill your message here' }}</textarea>
    {{ $errors->has('message') ? $errors->first('message') : ''}}
    <br>
    <button type="submit" class="{{ $class }}">SUBMIT</button>
</form>

@if($errors->any())
    <div style="position:absolute; top:0px; left:0px; width:100%; background:red">
        @foreach($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    </div>
@endif
