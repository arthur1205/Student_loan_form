function calculateAge() {
    const dob = document.getElementById('dob').value;
    const ageField = document.getElementById('age');
    if (dob) {
        const birthDate = new Date(dob);
        const today = new Date();
        let age = today.getFullYear() - birthDate.getFullYear();
        const m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        ageField.value = age;
    }
}
