<form action="{{route('locale' , $lang )}}" method="POST">
    @csrf
    <button type="submit">
        <span class="flag-icon flag-icon-{{$nation}} mx-2"></span>
    </button>
</form>