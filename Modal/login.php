    <div class="form-modal">

        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()">log in</button>
            <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
        </div>

        <div id="login-form">
            <input id="lgnEmail" type="text" placeholder="Enter email or username" required />
            <input id="lgnPass" type="password" placeholder="Enter password" required />
            <button onclick="login()" type="button" class="btn login">login</button>
            <hr />
        </div>
        <div id="signup-form">
            <input id="signEmail" type="email" placeholder="Enter your email" required />
            <input id="signUsername" type="text" placeholder="Choose username" required />
            <input id="signPass" type="password" placeholder="Create password" required />
            <label for="profile-pic">Profile picture</label>
            <input id="signProfilePicture" type="file" name="sekil" />
            <button onclick="signup()" type="button" class="btn signup">Create account</button>
            <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
            <hr />
        </div>
    </div>