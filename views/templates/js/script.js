function formatPhoneNumber(input) {
    const value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    if (value.length <= 10) {
      input.value = value.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
    } else {
      input.value = value.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
    }
  }