<style>
    .gravatar {
        float: none;
        max-width: 70px;
    }
    h1 {
        font-size: 1.4em;
        letter-spacing: -1px;
        margin-bottom: 3px;
        margin-top: 15px;
    }
</style>
<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>