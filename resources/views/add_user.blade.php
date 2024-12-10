<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h1>ADD USERS</h1>
    <form action="/add_user" id="form-data" method="post">
        @csrf

        <fieldset>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name.." required>

            <label for="department">Department</label>
            <select id="department" name="department_id" required>
                <option value="" disabled selected>Select Department</option>
                @foreach($depts as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>

            <label for="designation">Designation</label>
            <select id="designation" name="designation_id" required>
                <option value="" disabled selected>Select Designation</option>
                @foreach($desigs as $designation)
                    <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                @endforeach
            </select>

            <label for="contact">Contact</label>
            <input type="text" id="contact" name="contact" placeholder="Enter Contact Number.." required>

            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <a href="/">Back</a>
</body>
</html>
