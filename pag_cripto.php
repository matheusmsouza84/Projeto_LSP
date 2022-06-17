<?php
    session_start();
    $cripto = $_SESSION['cripto'];
    $real = $_SESSION['real'];
      
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="somar.js"></script>
    <title> Cadastro </title>
</head>
    <body>
    <div class="header">CMR Store</div>
            <nav class="navbar navbar-expand-md">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="loja.php">
                                <button type="button" id="paginicial" title="Ir para a loja">
                                    <svg class="bi bi-basket3-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 0 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/>
                                        <path d="M13.489 14.605A.5.5 0 0 1 13 15H3a.5.5 0 0 1-.489-.395L1.311 9H14.69l-1.201 5.605z"/>
                                            <rect width="16" height="2" y="6" rx=".5"/>
                                    </svg>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="controller/logout.php">
                                <button type="button" id="logout" title="Logout">
                                    <svg class="bi bi-person-dash-fill" width="20px" height="20px" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5-.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="content"><br><br><br>
            <div class="shadow-lg bg-cray" id="divsombra">
                        <h4><b>Pagamento Com CriptoMoeda</b></h4>
                        <button id='loginButton' onclick="" class="btn btn-outline-primary">
                            Login with MetaMask
                          </button>
                          <p id='userWallet' class='text-lg text-gray-600 my-2'></p>
                          <script>
                            window.userWalletAddress = null
                            const loginButton = document.getElementById('loginButton')
                            const userWallet = document.getElementById('userWallet')

                            <?php
                                
                            ?>
                        
                            function toggleButton() {
                              if (!window.ethereum) {
                                loginButton.innerText = 'MetaMask is not installed'
                                loginButton.classList.remove('bg-purple-500', 'text-white')
                                loginButton.classList.add('bg-gray-500', 'text-gray-100', 'cursor-not-allowed')
                                return false
                              }
                        
                              loginButton.addEventListener('click', loginWithMetaMask)
                            }
                        
                            async function loginWithMetaMask() {
                              const accounts = await window.ethereum.request({ method: 'eth_requestAccounts' })
                                .catch((e) => {
                                  console.error(e.message)
                                  return
                                })
                              if (!accounts) { return }
                        
                              window.userWalletAddress = accounts[0]
                              userWallet.innerText = window.userWalletAddress
                              loginButton.innerText = 'Sign out of MetaMask'
                        
                              loginButton.removeEventListener('click', loginWithMetaMask)
                              setTimeout(() => {
                                loginButton.addEventListener('click', signOutOfMetaMask)
                              }, 200)
                            }
                        
                            function signOutOfMetaMask() {
                              window.userWalletAddress = null
                              userWallet.innerText = ''
                              loginButton.innerText = 'Sign in with MetaMask'
                        
                              loginButton.removeEventListener('click', signOutOfMetaMask)
                              setTimeout(() => {
                                loginButton.addEventListener('click', loginWithMetaMask)
                              }, 200)
                            }
                        
                            window.addEventListener('DOMContentLoaded', () => {
                              toggleButton()
                            });
                          </script>
                    </div>
            </div>
        <div class="footer"></div>
    </body>
</html>