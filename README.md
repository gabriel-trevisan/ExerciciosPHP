# Exercícios PHP

Para iniciantes em PHP, segue abaixo alguns exercícios separados por dificuldades.

## Fácil

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

**Dica**: O array deve ser passado na primeira posição do parâmetro e o número que deve ser validado na segunda posíção do parâmetro ``check([1,2], 7)``

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

