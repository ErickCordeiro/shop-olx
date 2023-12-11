<div class="password-input-area">
    <input type="password" id="{{ $id }}" name="{{ $name }}" placeholder="{{ $placeholder }}" />
    <img class="img-eyes" src="/assets/icons/eyeIcon.png" alt="Ícone mostrar senha"
        onclick="togglePasswordVisibility('{{ $id }}', this)" />
</div>

<script>
    function togglePasswordVisibility(inputId, imgElement) {
        const input = document.getElementById(inputId);

        if (input.type == "password") {
            input.type = "text";
            imgElement.src = "/assets/icons/EyeSlash.svg";
        } else {
            input.type = "password";
            imgElement.src = "/assets/icons/eyeIcon.png";
        }
    }
</script>
