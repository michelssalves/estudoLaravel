   <h3> Providers</h3>

    {{-- this is how the comment is made in the blade --}}

    @php

    @endphp

    @if(count($providers) > 0 && count ($providers) < 10)
        <h3> There are some registered suppliers</h3>
    @elseif(count($providers) > 10)
        <h3>There are many registred suppliers</h3> 
    @else
        <h3> Do not exist registred suppliers</h3>     
    @endif      

    @isset($providers)
        {{--@for($i = 0; isset($providers[$i]); $i++)
        @php $i= 0 @endphp
        @while (isset($providers[$i]))
            
    Provider: {{ $providers[$i]['name'] }}
    <br>
    Status: {{ $providers[$i]['status'] }}
    <br>
    CNPJ: {{$providers[$i]['cnpj'] ?? 'This field has not been filled'}}
    <br>
    Phone: ({{$providers[$i]['ddd'] ?? ''}}) {{ $provider[$i]['phone'] ?? ''}}
    <hr>
    
    @switch($providers[$i]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('41')
            Curitiba - PR
            @break
        @case('55')
            Fortalez -CE
            @break    
        @default
            Unidentified state
    @endswitch
    @isset(($providers[$i]['cnpj']))
    CNPJ: {{$providers[$i]['cnpj']}}
    @empty($providers[$i]['cnpj'])
    Vazio
    @endempty
    @endisset
    <br>
    @if( ($providers[$i]['status'] == 'N'))
        Inactive Supplier
    @endif    
    <br>
    @unless($providers[$i]['status'] == 'S')
        Inactive Supplier
    @endunless 
    @php $i++ @endphp
    @endwhile
    @endfor--}}

    {{--@foreach ($providers as $index => $provider)--}}
    @forelse ($providers as $index => $provider)       
    Provider: {{ $provider['name'] }}
    <br>
    Status: {{ $provider['status'] }}
    <br>
    CNPJ: {{$provider['cnpj'] ?? 'This field has not been filled'}}
    <br>
    Phone: ({{$provider['ddd'] ?? ''}}) {{ $provider['phone'] ?? ''}}
    <hr>
    
    @switch($provider['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('41')
            Curitiba - PR
            @break
        @case('55')
            Fortalez -CE
            @break    
        @default
            Unidentified state
    @endswitch
    @isset(($provider['cnpj']))
    CNPJ: {{$provider['cnpj']}}
    @empty($provider['cnpj'])
    Vazio
    @endempty
    @endisset
    <br>
    @if( ($provider['status'] == 'N'))
        Inactive Supplier
    @endif    
    <br>
    @unless($provider['status'] == 'S')
        Inactive Supplier
    @endunless 
    @empty
            There are no registred suppliers !!
    @endforelse
    {{--@endforeach--}}
    @endisset
    <br>    

