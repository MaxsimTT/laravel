<div>
    <form>
        <input type="email" name="email" class="input-text" value="{{ $email }}">
        <input type="text" name="name" class="input-text" value="{{ $myName }}">
        <div>
            <p style="color: red;">{{ $message }}</p>
        </div>
        <button>Send</button>
    </form>
</div>