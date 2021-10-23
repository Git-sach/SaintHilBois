<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/faviconLP.ico">
    <link rel="stylesheet" href="/style/commun/menu.css">
    <link rel="stylesheet" href="/style/build.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title><?= App::getInstance()->title ?></title>

</head>

    <nav class="menu">
        <ul>
            <li><a class="<?= App::getMenu() == 'home' ? 'active' : 'notActive'?>" href="?p=home.admin.index">Home</a></li>
            <li><a class="<?= App::getMenu() == 'creation' ? 'active' : 'notActive'?>" href="?p=creation.admin.posts.index">Creation</a></li>
            <li class="logo"><a href="/index.php?p=home.index">
                <svg viewBox="0 0 297 288" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M294 164.5C294 177.698 291.4 190.766 286.35 202.96C281.299 215.153 273.897 226.232 264.564 235.564L193.5 164.5H294Z" fill="#68888F"/>
                    <path d="M294 164.5C294 177.698 291.4 190.766 286.35 202.96C281.299 215.153 273.897 226.232 264.564 235.564L193.5 164.5H294Z" fill="#B6D4DB"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M126.214 170.787L45.616 251.384L43.4947 253.505L43.4704 253.481C42.771 252.781 42.0791 252.075 41.3948 251.363C21.7725 230.931 8.3881 205.296 2.85345 177.471C-2.87645 148.665 0.0643445 118.806 11.304 91.6715C22.5436 64.5367 41.5772 41.3441 65.9979 25.0268C90.4186 8.70937 119.13 0 148.5 0C177.871 0 206.582 8.70938 231.002 25.0268C255.423 41.3442 274.457 64.5367 285.696 91.6715C296.936 118.806 299.877 148.665 294.147 177.471C288.612 205.296 275.228 230.931 255.605 251.363C254.913 252.083 254.213 252.798 253.505 253.505L251.384 251.384L170.313 170.313C171.05 169.637 171.756 168.927 172.429 168.186L253.484 249.241C272.687 229.229 285.785 204.128 291.204 176.886C296.818 148.661 293.937 119.406 282.925 92.8196C271.912 66.2329 253.263 43.5089 229.336 27.5212C205.408 11.5334 177.277 3 148.5 3C119.723 3 91.592 11.5334 67.6646 27.5212C43.7373 43.5089 25.0882 66.2329 14.0756 92.8195C3.06305 119.406 0.181659 148.661 5.79581 176.886C11.2147 204.128 24.3136 229.229 43.5166 249.241L124.052 168.705C124.741 169.431 125.462 170.126 126.214 170.787Z" fill="#68888F"/>
                    <path d="M250 146C250 122.585 241.944 99.8829 227.185 81.7054C212.425 63.5279 191.861 50.9818 168.945 46.1736C146.029 41.3655 122.157 44.588 101.336 55.3002C80.5148 66.0124 64.0134 83.562 54.602 105.002C45.1907 126.443 43.4424 150.468 49.6509 173.045C55.8593 195.622 69.6464 215.376 88.6972 228.989C107.748 242.602 130.903 249.247 154.273 247.807C177.644 246.367 201.765 234.973 219 219.123L170.196 170.137C164.655 175.232 157.53 178.266 150.017 178.729C142.504 179.192 135.06 177.055 128.936 172.679C122.811 168.303 118.379 161.952 116.383 154.694C114.387 147.436 114.949 139.713 117.975 132.82C121 125.928 126.305 120.286 132.999 116.842C139.692 113.398 147.366 112.362 154.733 113.908C162.1 115.454 168.711 119.487 173.456 125.331C178.201 131.174 180.791 138.473 180.791 146H250Z" fill="#68888F"/>
                    <path d="M250 146C250 122.585 241.944 99.8829 227.185 81.7054C212.425 63.5279 191.861 50.9818 168.945 46.1736C146.029 41.3655 122.157 44.588 101.336 55.3002C80.5148 66.0124 64.0134 83.562 54.602 105.002C45.1907 126.443 43.4424 150.468 49.6509 173.045C55.8593 195.622 69.6464 215.376 88.6972 228.989C107.748 242.602 130.903 249.247 154.273 247.807C177.644 246.367 201.765 234.973 219 219.123L170.196 170.137C164.655 175.232 157.53 178.266 150.017 178.729C142.504 179.192 135.06 177.055 128.936 172.679C122.811 168.303 118.379 161.952 116.383 154.694C114.387 147.436 114.949 139.713 117.975 132.82C121 125.928 126.305 120.286 132.999 116.842C139.692 113.398 147.366 112.362 154.733 113.908C162.1 115.454 168.711 119.487 173.456 125.331C178.201 131.174 180.791 138.473 180.791 146H250Z" fill="#B6D4DB"/>
                    <path d="M66.1629 267.554L64.8005 269.308L55 264.811L66.7396 249.847L69.0927 250.927L58.7155 264.137L66.1629 267.554Z" fill="#68888F"/>
                    <path d="M75.7265 273.623C74.3522 273.133 73.4147 272.346 72.9139 271.26C72.4359 270.164 72.4509 268.904 72.9589 267.479C73.3056 266.507 73.8043 265.533 74.4549 264.556C75.1224 263.585 75.9192 262.754 76.8453 262.064C77.7714 261.375 78.8166 260.907 79.9811 260.661C81.1456 260.415 82.4066 260.534 83.7641 261.018C85.1384 261.508 86.0645 262.302 86.5426 263.398C87.0434 264.483 87.0397 265.738 86.5317 267.163C86.185 268.135 85.6779 269.106 85.0105 270.077C84.3598 271.054 83.5714 271.887 82.6453 272.577C81.7192 273.267 80.6739 273.735 79.5095 273.981C78.345 274.227 77.084 274.108 75.7265 273.623ZM76.837 271.781C77.5912 272.05 78.3392 272.071 79.0812 271.845C79.84 271.624 80.54 271.25 81.1813 270.723C81.8453 270.186 82.4327 269.545 82.9435 268.802C83.4542 268.058 83.8471 267.301 84.122 266.53C84.4269 265.675 84.4846 264.931 84.2952 264.296C84.1058 263.662 83.5586 263.184 82.6536 262.861C81.8994 262.592 81.143 262.568 80.3842 262.788C79.6423 263.015 78.9392 263.397 78.2752 263.935C77.6339 264.462 77.0579 265.097 76.5471 265.84C76.0364 266.584 75.6435 267.341 75.3686 268.112C75.0637 268.967 75.006 269.711 75.1954 270.345C75.3848 270.98 75.932 271.458 76.837 271.781Z" fill="#68888F"/>
                    <path d="M100.022 265.601C100.228 265.655 100.458 265.725 100.712 265.811C100.965 265.896 101.206 265.997 101.433 266.112C101.682 266.215 101.902 266.319 102.095 266.426C102.292 266.515 102.436 266.599 102.525 266.678L101.275 268.583C100.968 268.354 100.6 268.146 100.171 267.959C99.7416 267.772 99.3207 267.624 98.9079 267.514C98.5467 267.419 98.1786 267.349 97.8037 267.305C97.4461 267.265 97.1268 267.254 96.8461 267.272L91.1053 277.9L88.7058 277.265L95.2177 265.184C95.9695 265.126 96.7592 265.132 97.5869 265.204C98.4191 265.259 99.2308 265.391 100.022 265.601Z" fill="#68888F"/>
                    <path d="M108.713 274.285C109.735 274.433 110.674 274.54 111.53 274.604C112.39 274.651 113.147 274.616 113.801 274.499C114.458 274.365 114.989 274.127 115.395 273.784C115.818 273.445 116.088 272.951 116.205 272.303C116.233 272.146 116.228 271.973 116.19 271.785C116.169 271.601 116.093 271.424 115.96 271.256C115.849 271.073 115.67 270.914 115.423 270.779C115.179 270.626 114.865 270.515 114.48 270.445C113.867 270.334 113.265 270.361 112.675 270.526C112.102 270.693 111.566 270.958 111.067 271.32C110.57 271.664 110.121 272.098 109.719 272.622C109.32 273.129 108.985 273.683 108.713 274.285ZM109.85 282.247C108.957 282.086 108.209 281.824 107.605 281.462C107.005 281.082 106.525 280.634 106.167 280.117C105.811 279.582 105.583 278.998 105.48 278.365C105.378 277.732 105.387 277.082 105.507 276.417C105.728 275.191 106.126 274.043 106.7 272.971C107.273 271.9 107.98 270.988 108.822 270.236C109.663 269.484 110.62 268.943 111.692 268.612C112.767 268.264 113.927 268.203 115.17 268.427C115.888 268.557 116.483 268.764 116.956 269.049C117.45 269.319 117.826 269.64 118.084 270.012C118.359 270.387 118.538 270.799 118.62 271.248C118.704 271.679 118.707 272.114 118.628 272.552C118.479 273.375 118.204 274.048 117.802 274.572C117.403 275.078 116.923 275.48 116.363 275.777C115.803 276.073 115.172 276.266 114.468 276.356C113.783 276.449 113.07 276.492 112.33 276.485C111.607 276.481 110.873 276.438 110.128 276.358C109.404 276.263 108.715 276.175 108.061 276.092C108.018 276.229 107.989 276.342 107.973 276.429C107.957 276.517 107.944 276.587 107.935 276.639C107.862 277.042 107.836 277.435 107.857 277.819C107.899 278.188 108.026 278.536 108.238 278.864C108.453 279.174 108.774 279.449 109.201 279.689C109.645 279.932 110.243 280.122 110.996 280.258C111.329 280.318 111.675 280.353 112.035 280.364C112.415 280.361 112.771 280.344 113.102 280.313C113.454 280.268 113.76 280.224 114.021 280.181C114.302 280.123 114.504 280.06 114.625 279.992L114.46 282.104C114.075 282.234 113.469 282.332 112.643 282.4C111.832 282.488 110.901 282.437 109.85 282.247Z" fill="#68888F"/>
                    <path d="M138.472 270.64C139.252 270.702 139.899 270.879 140.411 271.17C140.942 271.444 141.351 271.798 141.638 272.232C141.942 272.667 142.143 273.165 142.241 273.726C142.34 274.27 142.366 274.843 142.317 275.446C142.286 275.836 142.216 276.259 142.109 276.714C142.02 277.154 141.905 277.582 141.765 277.999L139.495 284.939L137.021 284.741L139.115 278.322C139.236 277.921 139.37 277.477 139.516 276.989C139.682 276.484 139.784 275.984 139.824 275.487C139.851 275.15 139.833 274.818 139.77 274.492C139.724 274.167 139.613 273.882 139.437 273.635C139.278 273.391 139.036 273.184 138.71 273.015C138.384 272.846 137.973 272.742 137.477 272.702C136.909 272.656 136.35 272.728 135.799 272.916C135.25 273.086 134.789 273.272 134.416 273.474C134.431 273.725 134.438 273.976 134.436 274.226C134.453 274.459 134.452 274.691 134.434 274.921C134.401 275.329 134.332 275.743 134.227 276.163C134.141 276.567 134.038 276.969 133.916 277.37L131.647 284.311L129.173 284.112L131.266 277.693C131.388 277.293 131.522 276.839 131.67 276.333C131.818 275.828 131.912 275.317 131.953 274.803C131.98 274.466 131.97 274.144 131.923 273.837C131.878 273.512 131.776 273.227 131.617 272.982C131.476 272.739 131.268 272.544 130.995 272.397C130.722 272.232 130.364 272.132 129.921 272.097C129.477 272.061 129.041 272.053 128.611 272.072C128.199 272.093 127.847 272.136 127.556 272.202L123.798 283.682L121.324 283.484L125.582 270.437C126.4 270.253 127.285 270.127 128.236 270.061C129.207 269.978 130.065 269.966 130.81 270.026C131.555 270.085 132.174 270.269 132.667 270.576C133.161 270.866 133.542 271.235 133.809 271.685C133.997 271.575 134.248 271.453 134.562 271.317C134.894 271.183 135.261 271.061 135.662 270.95C136.082 270.841 136.526 270.751 136.996 270.682C137.483 270.614 137.975 270.6 138.472 270.64Z" fill="#68888F"/>
                    <path d="M159.598 283.932L157.121 284.102L159.5 270.027L161.976 269.857L159.598 283.932ZM161.352 267.386C160.943 267.414 160.589 267.313 160.288 267.084C160.004 266.854 159.847 266.517 159.817 266.073C159.778 265.505 159.925 265.049 160.258 264.705C160.59 264.343 160.978 264.147 161.422 264.117C161.83 264.089 162.185 264.198 162.487 264.445C162.789 264.674 162.955 265.019 162.987 265.481C163.023 266.013 162.867 266.461 162.517 266.824C162.166 267.169 161.778 267.356 161.352 267.386Z" fill="#68888F"/>
                    <path d="M175.767 267.63C176.63 267.504 177.387 267.52 178.039 267.676C178.709 267.83 179.279 268.098 179.748 268.479C180.214 268.843 180.588 269.31 180.869 269.88C181.165 270.431 181.364 271.058 181.467 271.762C181.644 272.977 181.63 274.184 181.427 275.382C181.222 276.563 180.796 277.65 180.149 278.643C179.52 279.634 178.655 280.479 177.552 281.179C176.467 281.877 175.123 282.342 173.521 282.575C173.327 282.604 173.114 282.626 172.883 282.641C172.652 282.657 172.445 282.66 172.264 282.651L171.821 287.57L169.365 287.928L171.068 269.258C171.764 268.851 172.532 268.505 173.372 268.221C174.229 267.935 175.027 267.737 175.767 267.63ZM172.466 280.517C172.647 280.527 172.836 280.526 173.032 280.516C173.243 280.485 173.446 280.456 173.639 280.427C174.643 280.281 175.513 279.957 176.249 279.454C176.985 278.951 177.578 278.334 178.029 277.603C178.495 276.852 178.816 276.032 178.992 275.143C179.166 274.237 179.185 273.317 179.049 272.384C178.992 271.997 178.893 271.625 178.751 271.268C178.609 270.911 178.395 270.609 178.107 270.364C177.837 270.115 177.488 269.941 177.06 269.842C176.63 269.725 176.097 269.712 175.463 269.805C175.023 269.869 174.625 269.972 174.268 270.114C173.908 270.238 173.61 270.353 173.374 270.46L172.466 280.517Z" fill="#68888F"/>
                    <path d="M191.282 277.116C191.646 277.031 192.001 276.912 192.349 276.758C192.714 276.6 193.018 276.411 193.259 276.191C193.517 275.966 193.703 275.704 193.815 275.404C193.942 275.082 193.958 274.722 193.866 274.323C193.805 274.063 193.71 273.848 193.579 273.677C193.444 273.49 193.261 273.331 193.03 273.202C192.799 273.073 192.518 272.965 192.187 272.877C191.869 272.769 191.487 272.657 191.04 272.541C190.597 272.443 190.189 272.337 189.815 272.223C189.442 272.109 189.095 271.952 188.774 271.753C188.471 271.549 188.21 271.29 187.991 270.976C187.768 270.644 187.598 270.227 187.481 269.724C187.179 268.424 187.405 267.276 188.16 266.278C188.91 265.263 190.178 264.549 191.963 264.134C192.795 263.94 193.543 263.858 194.207 263.886C194.885 263.893 195.361 263.938 195.636 264.02L195.185 266.207C194.91 266.125 194.486 266.068 193.913 266.037C193.339 266.006 192.723 266.067 192.064 266.22C191.735 266.297 191.414 266.408 191.101 266.554C190.788 266.7 190.512 266.891 190.275 267.129C190.052 267.345 189.885 267.612 189.777 267.93C189.681 268.226 189.678 268.565 189.766 268.946C189.875 269.414 190.148 269.762 190.584 269.989C191.016 270.199 191.635 270.384 192.439 270.544C192.938 270.648 193.387 270.772 193.786 270.916C194.199 271.04 194.558 271.212 194.865 271.433C195.186 271.632 195.449 271.9 195.655 272.236C195.878 272.568 196.048 272.985 196.165 273.487C196.334 274.215 196.345 274.889 196.196 275.508C196.048 276.127 195.765 276.677 195.347 277.158C194.946 277.634 194.428 278.038 193.792 278.368C193.161 278.716 192.446 278.983 191.649 279.168C191.06 279.305 190.512 279.386 190.007 279.413C189.523 279.452 189.087 279.462 188.699 279.443C188.328 279.419 188.009 279.384 187.742 279.336C187.489 279.267 187.293 279.212 187.156 279.171L187.632 276.978C187.77 277.019 187.955 277.067 188.187 277.123C188.436 277.174 188.72 277.218 189.039 277.254C189.375 277.285 189.733 277.293 190.114 277.278C190.494 277.263 190.883 277.209 191.282 277.116Z" fill="#68888F"/>
                    <path d="M208.513 274.34C207.768 274.58 207.105 274.672 206.526 274.616C205.964 274.554 205.462 274.389 205.02 274.121C204.595 273.846 204.233 273.477 203.934 273.013C203.634 272.549 203.392 272.029 203.206 271.453C203.064 271.013 202.958 270.57 202.89 270.125C202.832 269.657 202.783 269.187 202.743 268.714L202.188 261.433L204.55 260.67L205.068 267.402C205.109 267.819 205.147 268.312 205.18 268.881C205.214 269.449 205.316 269.996 205.485 270.521C205.584 270.826 205.705 271.114 205.849 271.385C206.004 271.634 206.193 271.844 206.416 272.015C206.651 272.164 206.926 272.262 207.241 272.31C207.55 272.341 207.908 272.291 208.314 272.16C209.042 271.925 209.628 271.568 210.072 271.088C210.527 270.586 210.872 270.064 211.108 269.52C211.038 269.244 210.973 268.956 210.914 268.657C210.855 268.358 210.813 268.026 210.788 267.66L210.113 258.875L212.475 258.113L213.165 267.117C213.206 267.534 213.253 267.94 213.305 268.334C213.369 268.706 213.464 269.087 213.59 269.476C213.716 269.866 213.875 270.244 214.069 270.612C214.262 270.98 214.517 271.365 214.834 271.767L212.849 272.744C212.705 272.585 212.552 272.401 212.391 272.191C212.229 271.981 212.08 271.749 211.941 271.495C211.81 271.724 211.647 271.973 211.453 272.241C211.259 272.509 211.018 272.774 210.728 273.036C210.456 273.292 210.132 273.537 209.759 273.769C209.402 273.997 208.987 274.187 208.513 274.34Z" fill="#68888F"/>
                    <path d="M230.477 249.778C231.194 249.463 231.846 249.311 232.435 249.324C233.033 249.313 233.561 249.431 234.02 249.676C234.494 249.914 234.907 250.257 235.26 250.705C235.605 251.136 235.9 251.628 236.144 252.182C236.302 252.54 236.441 252.945 236.563 253.397C236.693 253.826 236.796 254.257 236.87 254.691L238.169 261.877L235.897 262.877L234.692 256.234C234.608 255.823 234.515 255.369 234.412 254.87C234.317 254.347 234.17 253.858 233.969 253.402C233.833 253.093 233.66 252.809 233.449 252.552C233.255 252.288 233.021 252.089 232.749 251.956C232.493 251.816 232.182 251.749 231.815 251.755C231.448 251.761 231.037 251.865 230.581 252.066C230.06 252.295 229.602 252.623 229.206 253.05C228.804 253.461 228.486 253.844 228.254 254.199C228.387 254.412 228.512 254.63 228.629 254.851C228.754 255.048 228.864 255.252 228.957 255.464C229.122 255.839 229.258 256.236 229.365 256.655C229.481 257.051 229.581 257.454 229.665 257.865L230.963 265.05L228.692 266.051L227.486 259.408C227.402 258.997 227.306 258.534 227.195 258.019C227.085 257.504 226.926 257.01 226.718 256.538C226.582 256.228 226.42 255.95 226.233 255.702C226.039 255.437 225.813 255.235 225.557 255.095C225.318 254.948 225.042 254.875 224.731 254.876C224.414 254.86 224.051 254.942 223.644 255.121C223.237 255.301 222.849 255.501 222.479 255.722C222.126 255.935 221.838 256.14 221.613 256.337L223.758 268.224L221.486 269.225L219.038 255.721C219.67 255.17 220.389 254.64 221.195 254.129C222.01 253.595 222.759 253.178 223.443 252.877C224.127 252.575 224.759 252.443 225.338 252.479C225.911 252.499 226.422 252.644 226.871 252.912C226.983 252.727 227.146 252.5 227.358 252.231C227.587 251.956 227.851 251.674 228.152 251.386C228.469 251.09 228.818 250.801 229.198 250.516C229.595 250.225 230.021 249.979 230.477 249.778Z" fill="#68888F"/>
                </svg>
            </a></li>
            <li><a class="<?= App::getMenu() == 'about' ? 'active' : 'notActive'?>" href="?p=about.admin.index">About</a></li>
            <li><a class="<?= App::getMenu() == 'contact' ? 'active' : 'notActive'?>" href="?p=contact.admin.index">Contact</a></li>
        </ul>
    </nav>
    
    <body>
    
        <?= $content; ?>

    </body>
</html>