<div id="main">
    <img <?php echo $html->includeImg("nen1", "jpg"); ?> alt="No" class="image_main" />
    <card style=" top: 20%;left: 15%;">
        <form class="login-form" autocomplete="off">
            <p class="title text_center">Đổi mật khẩu</p>
            <div class="input-icon">
                <input type="password" name="old-password" class="register-input2" placeholder="Mật khẩu cũ" />
            </div>
            <div class="input-icon">
                <input type="password" name="password" class="register-input2" placeholder="Mật khẩu mới" />
            </div>
            <div class="input-icon">
                <input type="password" name="reset-password" class="register-input2" placeholder="Nhập lại mật khẩu mới" />
            </div>

            <div class="button">
                <div class="type_submit"><input type="submit" value="Đổi mật khẩu"></div>
            </div>
        </form>
    </card>
</div>
</div>