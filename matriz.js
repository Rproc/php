let matrix = [[1, 2], [3, 4]]
let clientes = [['Marcos', '99999-9999'], ['Caroline', '88888-8888']]

// Adiciona
clientes.splice(1, 0, ['Lennon', '77777-7777'])

console.table(clientes)