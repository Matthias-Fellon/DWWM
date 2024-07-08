<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <title>Nav Bar</title>
</head>

<body>
    <div class="center">
        <div class="menu">
            <li class="item" id="profile">
                <a href="#profile" class="btn"><i class="far fa-user" aria-hidden="true"></i> Profile</a>
                <div class="smenu">
                    <a href="">Posts</a>
                    <a href="">Picture</a>
                </div>
            </li>
            <li class="item" id="message">
                <a href="#message" class="btn"> <i class="far fa-envelope" aria-hidden="true"></i> Messages</a>
                <div class="smenu">
                    <a href="">new</a>
                    <a href="">sent</a>
                    <a href="">spam</a>
                </div>
            </li>
            <li class="item" id="Settings">
                <a href="#Settings" class="btn"><i class="fas fa-cog" aria-hidden="true"></i> Settings</a>
                <div class="smenu">
                    <a href="">Password</a>
                    <a href="">Language</a>
                </div>
            </li>
            <li class="item" id="logout">
                <a href="#" class="btn"><i class="fas fa-sign-out-alt"></i> Logout</a>

            </li>
        </div>
    </div>
</body>