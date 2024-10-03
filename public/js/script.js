// Función para actualizar los valores en la tarjeta
function updateValues() {
    // Selecciona todos los checkboxes con la clase 'checkbox'
    const checkboxes = document.querySelectorAll('.checkbox');
    const totalCheckboxes = checkboxes.length;
    const checkedCheckboxes = document.querySelectorAll('.checkbox:checked').length;
    const uncheckedCheckboxes = totalCheckboxes - checkedCheckboxes;
    const selectedPercentage = ((checkedCheckboxes / totalCheckboxes) * 100).toFixed(2);

    // Actualizar los valores en la tarjeta
    document.getElementById('checkedCount').textContent = checkedCheckboxes;
    document.getElementById('uncheckedCount').textContent = uncheckedCheckboxes;
    document.getElementById('selectedPercentage').textContent = `${selectedPercentage}%`;

    // Condición para cambiar el color del porcentaje
    const percentageElement = document.getElementById('selectedPercentage');
    if (selectedPercentage > 69) {
        percentageElement.classList.remove('text-red-500');
        percentageElement.classList.add('text-green-500');
    } else {
        percentageElement.classList.remove('text-green-500');
        percentageElement.classList.add('text-red-500');
    }
}

// Añadir evento para cada checkbox para llamar a la función updateValues
document.querySelectorAll('.checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', updateValues);
});
