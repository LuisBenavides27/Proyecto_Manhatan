// Función para actualizar los valores en la tarjeta
function updateValues() {
    const checkboxes = document.querySelectorAll('.checkbox');
    const totalCheckboxes = checkboxes.length;
    const checkedCheckboxes = document.querySelectorAll('.checkbox:checked').length;
    const selectedPercentage = ((checkedCheckboxes / totalCheckboxes) * 100).toFixed(2);

    // Actualizar porcentaje
    const percentageElement = document.getElementById('selectedPercentage');
    percentageElement.textContent = `${selectedPercentage}%`;

    // Cambiar color dependiendo del porcentaje
    if (selectedPercentage >= 80) {
        percentageElement.classList.remove('text-red-500');
        percentageElement.classList.add('text-green-500');
    } else {
        percentageElement.classList.remove('text-green-500');
        percentageElement.classList.add('text-red-500');
    }
}

// Event listener para la lista desplegable (opcional)
document.getElementById('selectOptions').addEventListener('change', function() {
    const selectedValue = this.value;
    console.log('Opción seleccionada: ', selectedValue);
    // Aquí puedes hacer lo que necesites con el valor seleccionado.
});

// Event listener para checkboxes
document.querySelectorAll('.checkbox').forEach(function(checkbox) {
    checkbox.addEventListener('change', updateValues);
});

// Ejecutar al cargar la página
updateValues();