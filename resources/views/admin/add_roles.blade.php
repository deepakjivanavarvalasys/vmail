<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form method="POST" action="add_roles">
    @csrf
<input type="text" name="role_name">
@error('role_name')
<div class="alert-warning">Enter Role Name</div>
@enderror
<select name="role_status">
<option value='1'>Active</option>
<option value='0'>Inactive</option>

</select>

<input class="" type="submit" name="submit">





</form>
