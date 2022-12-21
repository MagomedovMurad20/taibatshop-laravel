<div>
    @foreach ( $data as $user)
      <P>
        Добро пожаловать имя:{{ $user->name }}
     </P>    
      <P>
        почта:{{ $user->email }}
     </P>    
    @endforeach

</div>