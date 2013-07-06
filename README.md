# Esqueci minha senha - Melhorias

### Esta extensão permite habilitar uma notificação de que o e-mail informado não existe para clientes que tentam recuperar suas senhas.

* Por padrão, o magento não diz ao cliente se o e-mail digitado é válido ou não e ele fica sem saber se o e-mail digitado é o mesmo usado em outro cadastro ou se a recuperação de senha falhou. Com este modulo o magento informará o cliente se o e-mail digitado não existir.

## Recursos
* Pode ser habilitado ou desabilitado em Sistema -> Configurações -> Cliente -> Configuração -> Opções de senha (System->Configuration->Customers->Customer Configuration->Password Options).
* Arquivos de tradução. Disponível em inglês e português (br)
* Utiliza observers ao invés de sobrescrever clases e controllers.

## Instalação
### Testado no 1.7 (mas deve funcionar em outras versões)

### Instalar com [modgit](https://github.com/jreinke/modgit)
    $ cd path/to/magento
    $ modgit init
    $ modgit clone forgotpassword git@github.com:r-martins/Magento-ForgotPassword.git

Ou faça manualmente:

* Faça download da última versão [aqui](https://github.com/r-martins/Magento-ForgotPassword/downloads)
* Descompacte na raíz da instalação da loja *mesclando com as pastas existentes*
* Limpe o cache


## Notas de Versão
### 0.1.0 
* Primeiro release

## Autor
[Ricardo Martins](http://ricardomartins.net.br/)  (<ricardo.martins@ricardomartins.net.br>)
