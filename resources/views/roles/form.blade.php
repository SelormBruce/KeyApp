<div class="form-group">

    <div>
        <label for="role" class="text-light">Role Name</label>
        <input type="text" class="form-control" name="role" value="{{old('role') ?? $role->role}}">
        <div class="text-light">
            {{$errors->first('role')}}
        </div>
    </div>
</div>
