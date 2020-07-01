<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SanberCode | Sign Up</title>
</head>
<body>
    <div>
        <h1>Buat Akun Baru!</h1>
        <h4>Sign Up Form</h4>
        <div>
            <form action="/welcome" method="POST">
            @csrf
                <label for="">First Name :</label><br><br>
                <input type="text" name="nama" required><br><br>
                
                <label for="">Last Name :</label><br><br>
                <input type="text" name="lengkap" required><br><br>
                
                <label for="">Gender :</label><br>
                <ul style="list-style: none;">
                    <li><input type="radio" name="gender" value="male">Male</li>
                    <li><input type="radio" name="gender" value="female">Female</li>
                    <li><input type="radio" name="gender" value="other">Other</li>
                </ul>
                
                <label for="national">Nationality :</label><br><br>
                <select name="national" id="">
                    <option value="Indonesia">Indonesia</option>
                    <option value="Arab">Arab</option>
                    <option value="Amerika">Amerika</option>
                </select>

                <br><br>

                <label for="lang">Language Spoken :</label>
                <ul style="list-style:none">
                    <li><input type="checkbox" name="lang" value="BIndo">Bahasa Indonesia</li>
                    <li><input type="checkbox" name="lang" value="English">English</li>
                    <li><input type="checkbox" name="lang" value="other">Other</li>
                </ul>

                <br><br>
                <label for="bio">Bio</label><br><br>
                <textarea name="bio" id="" cols="30" rows="10"></textarea>
                <br>
                <button type="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>