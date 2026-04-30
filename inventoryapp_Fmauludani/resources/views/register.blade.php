<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberBook - Buat Account Baru</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>

    <form action="/welcome" method="POST">
        @csrf
        <p><label for="first_name">First name:</label></p>
        <input type="text" id="first_name" name="first_name" required>

        <p><label for="last_name">Last name:</label></p>
        <input type="text" id="last_name" name="last_name" required>

        <p><label>Gender:</label></p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>

        <p><label>Nationality:</label></p>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>

        <p><label>Language Spoken:</label></p>
        <input type="checkbox" id="bahasa" name="language" value="Bahasa Indonesia">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language" value="English">
        <label for="english">English</label><br>
        <input type="checkbox" id="other_lang" name="language" value="Other">
        <label for="other_lang">Other</label>

        <p><label for="bio">Bio:</label></p>
        <textarea id="bio" name="bio" rows="10" cols="30"></textarea>
        <br><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
