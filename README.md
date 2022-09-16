## kolesa-upgrade-homework-1


* Сервис должен уметь получать данные из GET запроса (переменные, операторы) +
* Выполнять простые арифметические операции (сложение, вычитание, умножение и деление) +
* Валидировать данные перед вычислениями +
  * Проверка оператора (пример: выражение "5 q 2" не должно выполняться, так как "q" не является оператором) 
  * Проверка переданных переменных (являются ли они численными (int, float))
* Добавление дополительной функциональности (степень числа, сравнение чисел, процент числа)


* Добавленная функциональность:
  * Бинарные операторы:
    * '**', // Exponentiation
    * '+', // Addition
    * '-', // Subtraction
    * '*', // Multiplication
    * '/', // Division
    * '%', // Modulo
    * '===', // identical
    * '!==', // not identical
    * '<=>', // spaceship operator
    * '==', // equal
    * '<=', // less than or equal
    * '!=',  // not equal
    * '<>',  // not equal
    * '>=', // greater than or equal
    * '>', // greater than
    * '<', // less than
    * '&&', // And
    * '||', // Or
    * 'and', // And
    * 'xor', // Xor
    * 'or', // Or
  * Унарные операторы
    * 'sqrt', // Square root
    * '!', // Not
    * '--', // Decrement
    * '++', // Increment
    * 'abs', // Absolute value
    * 'acos', // Arc cosine
    * 'acosh', // Inverse hyperbolic cosine
    * 'asin', // Arc sine
    * 'asinh', // Inverse hyperbolic sine
    * 'atan2', // Arc tangent of two variables
    * 'atan', // Arc tangent
    * 'atanh', // Inverse hyperbolic tangent
    * 'bindec', // Binary to decimal
    * 'ceil', // Round fractions up
    * 'cos', // Cosine
    * 'cosh', // Hyperbolic cosine
    * 'decbin', // Decimal to binary
    * 'dechex', // Decimal to hexadecimal
    * 'decoct', // Decimal to octal
    * 'deg2rad', // Converts the number in degrees to the radian equivalent
    * 'exp', // Calculates the exponent of e
    * 'expm1', // Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
    * 'floor', // Round fractions down
    * 'hexdec', // Hexadecimal to decimal
    * 'is_finite', // Finds whether a value is a legal finite number
    * 'is_infinite', // Finds whether a value is infinite
    * 'is_nan', // Finds whether a value is not a number
    * 'log10', // Base-10 logarithm
    * 'log1p', // Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
    * 'log', // Natural logarithm
    * 'octdec', // Octal to decimal
    * 'pi', // Get value of pi
    * 'rad2deg', // Converts the radian number to the equivalent number in degrees
    * 'rand', // Generate a random integer
    * 'round', // Rounds a float
    * 'sin', // Sine
    * 'sinh', // Hyperbolic sine
    * 'sqrt', // Square root
    * 'srand', // Seed the random number generator
    * 'tan', // Tangent
    * 'tanh' // Hyperbolic tangent`