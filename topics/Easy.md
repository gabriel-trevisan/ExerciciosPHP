#### 1. Retorne a soma de dois números

Crie uma função que receba dois números como parâmetros e retorne a soma deles.

##### Exemplos

```
sum(5,10) ➞ 15
sum(20,10) ➞ 30
sum(4,4) ➞ 8
```

#### 2. Área do Triângulo

Crie uma função que receba a base e altura do triângulo e retorne a área.

##### Exemplos

```
area(5,10) ➞ 25
area(3,2) ➞ 3
area(5,6) ➞ 15
```

**Dica**: A área do triângulo é a ``(base * altura) / 2``

#### 3. Retorne o último elemento de um Array

Crie uma função que receba um array e retorne o último item deste array

##### Exemplos

```
getLastItem([10, 5, 25]) ➞ 25
getLastItem([8, 4, 3]) ➞ 3
getLastItem([5, 6, 15]) ➞ 15
```

#### 4. Valide se um Array contém um determinado número

Crie uma função que valide se um array contém um determinado número. Se contém um determinado número, retorne ``true``. Caso contrário, retorne ``false``

##### Exemplos

```
check([1, 2, 3, 4, 5], 5) ➞ true
check([1, 1, 2, 1, 1], 3) ➞ false
check([4, 5, 5, 6], 4) ➞ true
check([], 2) ➞ false
```

**Dica**: O array deve ser passado na primeira posição do parâmetro e o número que deve ser validado na segunda posição do parâmetro ``check([1,2], 7)``

#### 5. Os animais do fazendeiro

Um fazendeiro pergunta para você quantas pernas pode ser contada entre todos os seus animais. O fazendeiro tem 3 espécies de animais em sua fazenda:

- ``galinhas`` = 2 pernas
- ``vacas`` = 4 pernas
- ``porcos`` = 4 pernas

Você precisa criar uma função que retorne o **total números de pernas** de todos os animais.

##### Exemplos

```
animals(2, 3, 5) ➞ 36
animals(1, 2, 3) ➞ 22
animals(5, 2, 8) ➞ 50
```

**Dica**: A ordem dos animais passadas são ``animals(galinhas, vacas, porcos)``

#### 6. O menor número

Crie uma função que retorne o menor número:

```
smallNumber(20, 30) ➞ 20
smallNumber(10, 5) ➞ 5
smallNumber(20, 8) ➞ 8
```
#### 7. Encontre o menor número em um array

Crie uma função que retorne o menor número de um array.

##### Exemplos

```
findSmallestNumber([10, 3, 9, 4, 7]) ➞ 3
findSmallestNumber([5, 9, 3, 10, 2]) ➞ 2
findSmallestNumber([20, 7, 8, 6, 5]) ➞ 5
```

#### 8. Procurando o número ausente

Crie uma função que retorne o número ausente de um array de 1 até 10.

##### Exemplos

```
missNumber([10, 9, 8, 7, 6, 4, 3, 2, 1]) ➞ 5
missNumber([9, 10, 8, 7, 6, 5, 1, 2, 4]) ➞ 3
missNumber([7, 6, 8, 10, 9, 5, 4, 3, 2]) ➞ 1
```

#### 9. Hoje é natal?

Crie uma função que retorne ``true`` se hoje é Natal. Caso contrário, retorne ``false``

##### Exemplos

```
isChristmas(new DateTime("2010-12-25")) ➞ true
isChristmas(new DateTime("2050-12-25")) ➞ true
isChristmas(new DateTime("2020-05-11")) ➞ false
```

#### 10. Validação básica e-mail

Crie uma função que valide o endereço de e-mail e retorne ``true`` ou ``false``, dependendo dos valores.

- A string recebida por parâmetro deve conter o caracter ``@``.
- A string recebida por parâmetro deve conter o caracter ``.``.
- Antes do ``@``, deve conter pelo menos um caractere.
Exemplo: ``"g@gmail.com"`` é valido, enquanto ``"@gmail.com"`` é inválido.
- O ``.`` e o ``@`` devem estar em seus próprios lugares.
Exemplo: ``"gabriel@com"`` é invalido, enquanto ``"gabriel.trevisan.santos@gmail.com"`` é valido.

##### Exemplos

```
isValidEmail("@gmail.com") ➞ false
isValidEmail("gabriel@com") ➞ false
isValidEmail("gmail") ➞ false
isValidEmail("gabriel@gmail") ➞ false
isValidEmail("gabriel.trevisan.santos@gmail.com") ➞ true
```
