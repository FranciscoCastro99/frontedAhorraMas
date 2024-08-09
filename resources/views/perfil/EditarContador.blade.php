@extends('Plantilla')
    @section('contenido')
        <div class="flex h-screen w-screen">
            <div class="w-1/2 h-full">
                <h1 class="text-center py-4 font-semibold text-3xl">Contador 1</h1>
                <div>
                    <svg width="120" height="130" viewBox="0 0 170 169" fill="none" class="w-full"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1317_532)">
                            <path
                                d="M84.8924 168.992C75.6274 168.992 66.3533 169.016 57.0883 168.984C50.9893 168.96 48.6932 166.9 48.6304 161.456C48.5856 157.417 48.4331 153.371 48.7022 149.34C48.8816 146.642 47.7156 145.342 45.1415 144.074C19.8666 131.619 4.37698 112.459 0.771405 86.8304C-5.80293 40.1601 30.773 6.5023 71.4837 0.920927C114.078 -4.91891 154.546 17.5923 166.43 54.7395C177.615 89.6978 162.053 124.503 125.827 142.725C122.311 144.494 120.849 146.287 121.19 149.857C121.549 153.597 121.298 157.393 121.271 161.157C121.226 166.924 119.02 168.96 112.697 168.984C103.432 169.016 94.1575 168.984 84.8924 168.984V168.992ZM85.1705 4.18413C84.6951 4.36183 84.2198 4.53145 83.7444 4.70915C84.0135 7.47964 83.6368 9.60396 79.6993 10.2178C73.116 11.2436 66.3175 11.9867 60.1288 14.0868C32.6296 23.3999 15.8933 41.4444 12.0545 67.5581C8.11708 94.3422 19.4989 115.989 44.1907 131.546C46.9173 133.258 50.801 134.203 54.1644 134.244C74.3269 134.486 94.4983 134.43 114.661 134.284C117.378 134.268 120.473 133.767 122.733 132.515C142.564 121.571 154.923 105.836 158.008 84.9484C162.941 51.4844 139.263 20.4275 102.992 12.2614C97.5658 11.0417 91.978 10.3794 86.8387 9.52318C86.2019 7.48772 85.6907 5.83189 85.1705 4.17605V4.18413Z"
                                fill="#585353" />
                            <path
                                d="M33.6699 46.1291C37.0333 47.9627 39.4101 48.8835 41.2129 50.3697C42.3609 51.3066 42.6569 53.0836 43.3386 54.481C41.5358 54.7475 39.5716 55.531 37.9571 55.1514C35.7418 54.6264 33.7775 53.2209 30.45 51.5651C28.2257 58.8346 26.1448 65.6356 23.8129 73.2848C27.6427 73.2848 30.2437 72.8809 32.5757 73.4221C34.1901 73.7936 35.4278 75.4737 36.836 76.5722C35.4099 77.4849 34.1004 78.8823 32.5219 79.1973C30.2616 79.6496 27.8041 79.3104 24.8533 79.3104C25.0775 81.5316 25.0237 83.5186 25.526 85.3926C26.082 87.4765 26.2166 89.3019 23.5528 89.932C20.3418 90.6912 19.8127 88.365 19.418 86.3699C16.7721 73.204 19.0144 60.6197 25.8219 48.8188C39.0783 25.8149 65.1962 14.2563 90.8747 16.6634C120.32 19.4258 143.102 37.6399 149.515 62.8086C151.533 70.7324 151.981 78.8177 149.864 86.798C149.533 88.058 147.586 88.9627 146.384 90.037C145.55 88.7042 144.133 87.4038 144.008 86.0145C143.819 83.979 144.546 81.879 144.967 79.3023C142.025 79.3023 139.586 79.6416 137.353 79.1892C135.792 78.8662 134.509 77.4526 133.092 76.5318C134.518 75.4576 135.774 73.8583 137.406 73.4302C139.46 72.889 141.828 73.3009 144.626 73.3009C144.429 65.7891 142.286 59.0123 138.465 52.0982C136.07 53.2855 134.025 54.7071 131.711 55.3129C130.231 55.7006 128.365 54.8929 126.67 54.6183C127.271 53.1967 127.469 51.3874 128.581 50.4343C130.258 48.9965 132.563 48.1565 134.823 46.9449C131.128 40.0793 124.957 35.6933 117.925 31.2832C116.535 33.3025 115.522 35.4268 113.854 36.9776C112.75 38.0034 110.705 38.2134 109.082 38.7869C108.795 37.2442 107.916 35.5479 108.355 34.191C109.028 32.0909 110.598 30.2331 112.338 27.3576C104.131 25.3949 96.6149 23.5936 88.0943 21.5582C88.0943 25.096 88.4889 27.4061 87.9508 29.5304C87.6189 30.8551 85.8879 31.897 84.7757 33.0682C83.7891 31.9213 82.2554 30.8712 81.9594 29.595C81.4841 27.5515 81.8339 25.3545 81.8339 22.7617C73.0531 22.2609 65.5281 24.781 57.8236 27.923C59.0434 29.8939 60.5144 31.5336 61.0704 33.3994C61.5637 35.0552 61.8059 37.8742 60.8014 38.5688C58.6847 40.0227 56.7653 38.5446 55.5993 36.4284C54.6127 34.6514 53.3212 33.0117 51.4825 30.3139C45.4463 35.6772 39.8317 40.6608 33.6878 46.121L33.6699 46.1291Z"
                                fill="#585353" />
                            <path
                                d="M95.395 71.3462C91.924 71.0312 89.0539 70.7727 85.816 70.482V78.7127C86.1389 78.7611 86.4528 78.8096 86.7757 78.8661C87.0089 76.9599 87.2421 75.0618 87.4753 73.1555C87.7264 73.1475 87.9776 73.1394 88.2287 73.1313C88.5157 75.1587 88.8117 77.178 89.0987 79.2054C89.4933 79.1811 89.888 79.165 90.2826 79.1408C90.4979 77.0084 90.7042 74.876 90.9194 72.7436C91.0898 72.7355 91.2602 72.7274 91.4307 72.7113C91.8791 75.2395 92.3365 77.7757 92.9016 80.9581C90.0135 84.7787 85.7801 86.1437 80.874 84.294C76.237 82.5494 74.5867 79.0358 76.1473 72.6305C76.3267 75.2475 76.4344 76.8711 76.5599 78.7854C79.0802 78.9065 81.5378 79.0277 83.9684 79.1488C85.1344 71.2493 84.1747 69.8843 77.8246 71.3462C78.2999 69.1654 78.3358 67.1461 79.1699 65.4418C83.4123 56.7103 87.7444 48.003 92.3455 39.425C93.1348 37.9549 95.386 37.123 96.9646 36.0002C97.6193 37.7045 98.9557 39.4654 98.8032 41.1051C97.8346 51.3955 96.5341 61.6616 95.404 71.3382L95.395 71.3462Z"
                                fill="#585353" />
                            <path
                                d="M84.6859 121.344C77.696 121.344 74.1891 118.154 74.1652 111.773C74.1412 105.392 77.678 102.201 84.7756 102.201C92.1183 102.201 95.7866 105.553 95.7806 112.257C95.7687 118.315 92.0704 121.344 84.6859 121.344Z"
                                fill="#585353" />
                            <path
                                d="M66.8466 112.072C66.8287 118.259 63.4264 121.352 56.6398 121.352C45.4823 121.368 45.6168 122.322 45.6796 111.571C45.7334 102.201 45.6616 102.201 55.8685 102.201C63.2111 102.201 66.8705 105.489 66.8466 112.063V112.072Z"
                                fill="#585353" />
                            <path
                                d="M124.213 111.999C124.213 118.234 120.706 121.352 113.692 121.352C106.678 121.352 103.139 118.119 103.073 111.652C103.049 105.351 106.568 102.204 113.629 102.209C120.697 102.209 124.228 105.472 124.222 111.999H124.213Z"
                                fill="#585353" />
                            <path
                                d="M79.5201 9.40183C79.9416 9.32914 80.3632 9.25644 80.7847 9.1999C80.8834 9.18375 80.982 9.17567 81.0807 9.15951C80.8116 9.19182 80.8116 9.19182 81.0807 9.15951C81.278 9.14336 81.4753 9.11913 81.6727 9.10297C82.4978 9.03028 83.314 8.99797 84.1392 8.98989C84.9643 8.98182 85.7895 9.0222 86.6146 9.08682C86.8119 9.10297 87.0093 9.11913 87.2066 9.14336C87.368 9.15951 87.7985 9.21605 87.3949 9.15951C87.8524 9.22413 88.3098 9.28875 88.7582 9.36952C89.9063 9.57145 91.2337 9.07874 91.5207 7.95601C91.7718 6.95443 91.1889 5.6863 89.9511 5.46822C86.0854 4.78973 82.1929 4.79781 78.3362 5.50053C77.1881 5.71053 76.4168 6.99482 76.7666 7.98832C77.1612 9.08682 78.2913 9.61992 79.529 9.40183H79.5201Z"
                                fill="#585353" />
                            <path
                                d="M80.2822 9.27269C83.3048 9.15153 86.3274 9.20808 89.3499 9.44231C90.5249 9.53116 91.646 8.44881 91.5922 7.42301C91.5294 6.25181 90.6056 5.50062 89.3499 5.4037C86.3363 5.16946 83.3048 5.11292 80.2822 5.23408C79.1162 5.28254 77.9861 6.13065 78.0399 7.25338C78.0937 8.30342 79.0265 9.32116 80.2822 9.27269Z"
                                fill="#585353" />
                            <path
                                d="M79.1431 9.67658C83.2957 9.57965 87.4574 9.61196 91.6101 9.76543C92.785 9.80582 93.9062 8.80424 93.8524 7.74612C93.7985 6.61531 92.8658 5.77528 91.6101 5.72681C87.4574 5.57334 83.2957 5.54104 79.1431 5.63796C77.9681 5.66219 76.847 6.55069 76.9008 7.65727C76.9546 8.76385 77.8874 9.70889 79.1431 9.67658Z"
                                fill="#585353" />
                            <path
                                d="M84.8115 6.39726C87.6996 6.39726 87.6996 2.35864 84.8115 2.35864C81.9235 2.35864 81.9235 6.39726 84.8115 6.39726Z"
                                fill="#585353" />
                            <path
                                d="M83.4482 7.21294H83.6724C83.9774 7.22101 84.2733 7.16447 84.5334 7.03524C84.8115 6.95446 85.0537 6.81715 85.251 6.61522C85.4662 6.42944 85.6277 6.21944 85.7174 5.96904C85.8609 5.72673 85.9237 5.46825 85.9147 5.19363L85.834 4.66053C85.7263 4.32129 85.538 4.02243 85.2599 3.77203L84.8025 3.45702C84.4527 3.27125 84.076 3.1824 83.6724 3.1824H83.4482C83.1432 3.17432 82.8473 3.23086 82.5872 3.36009C82.3091 3.44087 82.0669 3.57818 81.8696 3.78011C81.6544 3.96589 81.4929 4.1759 81.4032 4.42629C81.2597 4.66861 81.1969 4.92708 81.2059 5.2017L81.2866 5.7348C81.3943 6.07405 81.5826 6.3729 81.8607 6.6233L82.3181 6.93831C82.6679 7.12409 83.0446 7.21294 83.4482 7.21294Z"
                                fill="#585353" />
                            <path
                                d="M77.5647 71.5079C77.5826 72.8487 77.6006 74.1895 77.6095 75.5384C77.6095 75.9907 77.7889 76.4107 78.0939 76.7581C78.3809 77.0892 78.7934 77.3881 79.2598 77.485C79.6545 77.5658 80.0581 77.5658 80.4527 77.485C80.9191 77.3881 81.6008 76.9681 81.7891 76.5561C81.9775 76.1442 82.1748 75.7565 82.2914 75.3284C82.408 74.9003 82.4797 74.4318 82.5246 73.9795C82.5963 73.2445 82.4887 72.4852 82.2914 71.7744C82.1568 71.2898 81.7353 70.8213 81.2599 70.5709C80.7846 70.3205 80.067 70.2074 79.5289 70.369C78.354 70.7163 77.6544 71.7582 77.9593 72.8568C78.0131 73.0425 78.049 73.2283 78.0849 73.4222L78.0042 72.8891C78.0669 73.3414 78.0669 73.7937 78.0042 74.246L78.0849 73.7129C78.0221 74.141 77.8965 74.553 77.7172 74.9568L77.9414 74.4722L77.9145 74.5368L82.0941 75.5546C82.0761 74.2137 82.0582 72.8729 82.0492 71.524C82.0492 70.999 81.8071 70.4659 81.3945 70.0943C81.0088 69.747 80.363 69.4805 79.8069 69.5047C79.2509 69.5289 78.623 69.6986 78.2194 70.0943C77.8158 70.4901 77.5557 70.9748 77.5647 71.524V71.5079Z"
                                fill="#585353" />
                            <path
                                d="M80.8833 78.6481L81.1434 74.981C81.1793 74.4883 80.8654 73.8987 80.4887 73.5514C80.112 73.204 79.4573 72.9375 78.9012 72.9617C78.3451 72.986 77.7172 73.1556 77.3136 73.5514C76.91 73.9472 76.6948 74.4237 76.6589 74.981L76.3988 78.6481C76.3629 79.1408 76.6768 79.7305 77.0535 80.0778C77.4302 80.4251 78.085 80.6917 78.6411 80.6674C79.1971 80.6432 79.825 80.4736 80.2286 80.0778C80.6322 79.682 80.8475 79.2054 80.8833 78.6481Z"
                                fill="#585353" />
                            <path
                                d="M81.1884 75.8453C81.1435 75.603 81.1346 75.5788 81.1704 75.7726C81.1525 75.6353 81.1435 75.498 81.1345 75.3688C81.1256 75.1345 81.1346 74.8922 81.1435 74.658C81.1435 74.553 81.1615 74.456 81.1704 74.351C81.1346 74.553 81.1435 74.5287 81.1884 74.2783C81.2511 74.0118 81.3139 73.7372 81.3947 73.4706C81.7086 72.4206 81.9328 72.0006 82.4889 71.0636C83.5652 69.2381 84.8926 67.55 85.7985 65.6438L81.6189 64.626C81.6548 64.1979 81.5382 64.8603 81.4843 64.9734C81.6637 64.5776 81.2781 65.2399 81.2332 65.3045C81.1884 65.3611 80.713 65.9588 80.9641 65.6599C80.8386 65.8134 80.704 65.9588 80.5785 66.1042C79.8071 67.0007 79.1165 67.9135 78.5963 68.9554C77.5738 71.007 77.0267 73.196 77.1254 75.4576L81.5292 74.9245C81.4754 74.7064 81.4216 74.4803 81.3857 74.2622C81.4216 74.5045 81.3588 73.8664 81.3588 73.7856C81.3408 73.2929 81.3588 72.8083 81.4216 72.3236C81.5471 71.2736 80.3004 70.2559 79.1793 70.3043C77.8608 70.3609 77.0716 71.1928 76.937 72.3236C76.7935 73.5595 76.9101 74.7872 77.1971 75.9988C77.7263 78.22 81.6996 77.7354 81.6009 75.4657C81.574 74.9407 81.583 74.4156 81.6368 73.8825C81.6458 73.7533 81.6637 73.6241 81.6817 73.4868C81.6458 73.6968 81.6548 73.6806 81.6996 73.4383C81.7444 73.2444 81.7803 73.0506 81.8252 72.8567C81.9507 72.3398 82.1122 71.8309 82.3185 71.3382C82.3723 71.2171 82.4171 71.0878 82.4709 70.9667C82.3812 71.1444 82.3992 71.1201 82.5068 70.902C82.6144 70.692 82.731 70.4901 82.8476 70.2801C83.1078 69.8439 83.3948 69.4239 83.7087 69.02C83.7894 68.915 83.8791 68.802 83.9688 68.697C83.8342 68.8585 83.8432 68.8423 84.0047 68.6566C84.2289 68.3981 84.4621 68.1316 84.6773 67.8731C85.4935 66.8957 86.0048 65.8457 86.1034 64.618C86.1662 63.7779 85.359 62.8571 84.4531 62.6713C83.5472 62.4856 82.3185 62.7683 81.9238 63.6002C80.9283 65.7003 79.4125 67.5338 78.3003 69.5774C77.0357 71.8955 76.3451 74.3349 76.8742 76.9115C77.0895 77.9535 78.5515 78.64 79.6367 78.325C80.8744 77.9615 81.4305 76.96 81.2063 75.8372L81.1884 75.8453Z"
                                fill="#585353" />
                            <path
                                d="M81.0267 76.0553C79.8518 73.0829 81.7084 70.2074 83.7623 67.9539C86.3185 65.1511 89.054 62.4694 91.6999 59.7474C92.4982 58.9235 92.5968 57.6958 91.6999 56.888C90.8837 56.153 89.3321 56.0642 88.5249 56.888C85.5202 59.9735 82.3452 62.9864 79.5737 66.2496C76.9817 69.3028 75.1789 73.3091 76.6857 77.1296C77.0893 78.1554 78.2194 78.842 79.4482 78.5431C80.5514 78.2685 81.4214 77.0892 81.0177 76.0553H81.0267Z"
                                fill="#585353" />
                            <path
                                d="M84.7486 78.4462C85.224 75.1588 85.5469 71.8471 85.7083 68.5355H81.2238L82.4167 77.5012C82.5512 78.5431 83.3495 79.577 84.6589 79.5205C85.9684 79.464 86.8295 78.632 86.9012 77.5012C87.0089 75.8534 87.1703 74.2057 87.3856 72.5579C87.4125 72.3398 87.4394 72.1298 87.4752 71.9117C87.4752 71.8633 87.556 71.3544 87.5291 71.5402C87.5021 71.726 87.5829 71.2171 87.5918 71.1686C87.6277 70.9586 87.6636 70.7405 87.6995 70.5305C87.843 69.6743 88.0044 68.8262 88.1748 67.9781L84.8832 69.1816C85.2419 69.3755 84.6948 69.0847 84.6859 68.9635C84.6859 69.012 84.8204 69.1816 84.8563 69.222C84.7576 68.9959 84.7397 68.9555 84.8025 69.1009C84.8294 69.1736 84.8652 69.2543 84.8832 69.327C84.928 69.4563 84.9639 69.5855 84.9908 69.7147C85.1702 70.4013 85.2958 71.104 85.4393 71.7987C85.7532 73.2849 86.0761 74.7711 86.39 76.2573C86.5963 77.2427 87.825 77.8243 88.8475 77.7031C89.9417 77.5739 90.7848 76.7338 90.7938 75.7161C90.8117 73.2364 90.3633 70.7486 89.4484 68.4062C89.0717 67.4531 88.139 66.8231 86.9909 66.9604C85.8429 67.0977 85.1792 67.9297 85.0446 68.9474C84.6769 71.6533 84.8025 74.3511 85.2868 77.0408C85.4662 78.0262 86.7487 78.6078 87.7443 78.4866C88.8655 78.3493 89.6458 77.5173 89.6906 76.4996C89.7803 74.238 89.8072 71.9764 89.7624 69.7147H85.2778C85.4124 71.314 85.5379 72.9214 85.6725 74.5207C85.7442 75.4011 85.7083 76.3784 85.9326 77.2427C86.2734 78.527 87.6187 79.4316 89.0986 79.0439C90.0763 78.7855 90.7041 77.9939 90.749 77.0973C90.8476 74.7226 90.9463 72.3398 91.0449 69.9651H86.5604C86.7846 72.6225 87.0178 75.2799 87.242 77.9293C87.3317 78.9389 88.0313 79.7709 89.1883 79.9163C90.3454 80.0617 91.2512 79.4236 91.6459 78.4705C92.6773 75.9988 92.5876 73.2929 92.4441 70.7002C92.3813 69.6501 91.4575 68.6324 90.2018 68.6808C89.0359 68.7293 87.8968 69.5693 87.9596 70.7002C88.0313 71.8956 88.0941 73.091 88.0313 74.2784C88.0134 74.5449 87.9955 74.8034 87.9685 75.0699C87.9685 75.0538 87.8878 75.6111 87.9327 75.385C87.9685 75.183 87.8968 75.5626 87.8878 75.603C87.7623 76.2169 87.5739 76.8146 87.3317 77.3962L91.7356 77.9293C91.5113 75.2719 91.2781 72.6145 91.0539 69.9651C90.9642 68.9151 90.0852 67.8974 88.8116 67.9458C87.538 67.9943 86.6142 68.8343 86.5694 69.9651C86.4707 72.3398 86.372 74.7226 86.2734 77.0973L87.9237 75.1507L87.8071 75.183L89.5381 75.385C90.157 76.6208 90.4171 76.9115 90.3184 76.2734L90.2826 75.8373L90.2108 74.9649L90.0673 73.2203C89.9686 72.0571 89.879 70.8859 89.7803 69.7228C89.6906 68.6728 88.8116 67.655 87.538 67.7035C86.3362 67.752 85.2778 68.592 85.2958 69.7228C85.3406 71.9844 85.3137 74.2461 85.224 76.5077L89.6278 75.9746C89.6009 75.8373 89.583 75.7 89.5561 75.5546C89.4484 74.8922 89.565 75.7404 89.5292 75.3607C89.5023 75.078 89.4574 74.8034 89.4305 74.5207C89.3677 73.8907 89.3318 73.2606 89.3229 72.6306C89.3049 71.4029 89.3857 70.1751 89.5471 68.9555L85.1433 69.4886C85.5559 70.5467 85.8787 71.621 86.085 72.7195C86.1119 72.8487 86.1299 72.986 86.1568 73.1233C86.2285 73.4545 86.1299 72.8487 86.1658 73.1879C86.1927 73.4545 86.2285 73.7291 86.2554 73.9957C86.3093 74.5691 86.3272 75.1426 86.3182 75.7161L90.7221 75.183C90.3633 73.4868 89.9956 71.7906 89.6368 70.0944C89.278 68.3981 88.9282 66.6777 87.1434 65.7003C85.9864 65.0703 84.1118 65.6196 83.8517 66.9039C83.1432 70.4013 82.6588 73.9472 82.4257 77.5012H86.9102L85.7173 68.5355C85.5828 67.4935 84.7845 66.4596 83.475 66.5161C82.1655 66.5727 81.2866 67.4046 81.2328 68.5355C81.0713 71.8552 80.7484 75.1588 80.2731 78.4462C80.1206 79.4963 81.4121 80.514 82.5153 80.4655C83.8607 80.409 84.5962 79.577 84.7576 78.4462H84.7486Z"
                                fill="#585353" />
                            <path
                                d="M89.5026 82.7269C92.2382 81.4023 94.3459 78.8822 94.9199 76.1278C95.0365 75.5867 95.0096 75.0616 94.6957 74.5689C94.4266 74.1489 93.8885 73.7531 93.3593 73.64C92.7853 73.5189 92.1395 73.5512 91.6283 73.842C91.1619 74.1166 90.7044 74.5366 90.5968 75.0455C90.4892 75.5544 90.3098 76.0955 90.0766 76.5963L90.3008 76.1117C90.0049 76.7336 89.6192 77.3233 89.1618 77.8644L89.5116 77.4525C89.0631 77.9694 88.5608 78.4299 87.9868 78.8337L88.4442 78.5187C88.0586 78.7852 87.6639 79.0195 87.2334 79.2295C86.202 79.7303 85.7894 81.0953 86.4262 81.9919C87.1078 82.937 88.3904 83.252 89.4936 82.7189L89.5026 82.7269Z"
                                fill="#585353" />
                            <path
                                d="M90.4176 69.6743C90.1754 71.6532 89.9332 73.6402 89.6821 75.6191C89.6731 75.708 89.6552 75.8049 89.6462 75.8937C89.6821 75.6595 89.6821 75.6676 89.6462 75.9099C89.6104 76.1199 89.5655 76.3299 89.5207 76.548C89.4758 76.7661 89.413 76.968 89.3413 77.1699C89.3054 77.283 89.2606 77.4042 89.2067 77.5173C89.3054 77.3234 89.3144 77.2911 89.2516 77.4203C89.1529 77.5738 89.0543 77.7353 88.9556 77.8969C88.7583 78.2361 89.2067 77.6788 88.83 78.0423C88.7224 78.1473 88.256 78.4219 88.7045 78.1796C88.5789 78.2442 87.9421 78.4946 88.4803 78.3169C87.3771 78.6723 86.525 79.7062 86.9107 80.8047C87.2605 81.782 88.4892 82.5978 89.6731 82.2182C92.2562 81.3782 93.6106 79.27 93.9962 76.9034C94.3819 74.5367 94.6241 72.0893 94.9201 69.6904C95.0546 68.6404 93.7989 67.6226 92.6778 67.6711C91.3504 67.7276 90.579 68.5596 90.4355 69.6904L90.4176 69.6743Z"
                                fill="#585353" />
                            <path
                                d="M90.1395 70.9182C90.2382 71.7582 90.3368 72.6063 90.3727 73.4544C90.3906 73.8744 90.3996 74.3025 90.3727 74.7226C90.3637 74.9649 90.3368 75.2072 90.3189 75.4414C90.283 75.9261 90.3906 75.1103 90.283 75.6353C90.2113 75.9826 90.1216 76.3218 90.0139 76.653C89.9601 76.8226 89.8884 76.9842 89.8256 77.1457C89.6731 77.5334 90.0139 76.8065 89.7538 77.275C89.5834 77.59 89.3771 77.8727 89.1619 78.1634C89.0632 78.2846 89.0991 78.2442 89.2605 78.0423C89.1888 78.115 89.117 78.1958 89.0453 78.2604C88.8928 78.4058 88.7403 78.5431 88.5699 78.6723L91.745 81.5317C92.6867 80.5785 93.3415 79.5689 93.8796 78.3896C94.2384 77.6061 93.6464 76.4915 92.8482 76.1118C92.0499 75.7322 90.7584 75.7161 90.1305 76.4268C89.5565 77.073 88.9915 77.7192 88.4174 78.3735C88.0318 78.8096 87.7627 79.2216 87.7627 79.8031C87.7627 80.2958 88.0049 80.8936 88.4174 81.2328C89.3861 82.0324 90.6149 81.9436 91.5925 81.2328C92.1665 80.8128 92.7316 80.4008 93.3056 79.9808L90.1305 77.1215C89.8077 77.4527 89.4579 77.7434 89.0991 78.0342C88.9018 78.1796 88.9107 78.1715 89.126 78.0261C89.0273 78.0908 88.9287 78.1554 88.83 78.22C88.6327 78.3411 88.4264 78.4623 88.2201 78.5754C87.2156 79.1246 86.7492 80.4089 87.4129 81.3378C88.0766 82.2667 89.404 82.6463 90.4803 82.0648C91.5566 81.4832 92.4894 80.7966 93.2877 79.9808C94.0859 79.165 94.2204 77.8969 93.2877 77.1215C92.3549 76.3461 91.0902 76.4107 90.1126 77.1215C89.5386 77.5415 88.9735 77.9534 88.3995 78.3735L91.5746 81.2328C92.1486 80.5866 92.7136 79.9404 93.2877 79.2862L89.5386 77.3234C89.7628 76.8307 89.4489 77.4607 89.404 77.5496C89.3054 77.7111 89.2067 77.8727 89.0991 78.0261C89.0004 78.1635 88.8928 78.3735 88.7583 78.4785C89.1708 78.1473 88.6417 78.5915 88.561 78.6804C87.7806 79.472 87.6282 80.7643 88.561 81.5397C89.4937 82.3151 90.7943 82.2909 91.736 81.5397C95.0994 78.8581 95.0366 74.6095 94.6061 70.9262C94.4806 69.8762 93.6644 68.8585 92.3638 68.9069C91.2517 68.9554 89.987 69.8035 90.1216 70.9262L90.1395 70.9182Z"
                                fill="#585353" />
                            <path
                                d="M84.4711 76.4833C84.4083 76.8468 84.3365 77.2264 84.3455 77.598C84.3545 77.9695 84.4172 78.333 84.489 78.6884C84.5249 78.8822 84.5877 79.0761 84.6594 79.2619C84.8029 79.6011 84.9554 79.9484 85.1617 80.2715C85.3052 80.5058 85.4935 80.6996 85.7357 80.8369C85.951 81.0146 86.2021 81.1358 86.4981 81.2004C86.7941 81.2812 87.09 81.2973 87.395 81.2327C87.691 81.2166 87.969 81.1439 88.2291 80.9904C88.7045 80.7158 89.126 80.2958 89.2605 79.7869C89.3951 79.278 89.3413 78.7126 89.0363 78.228C88.9556 78.1068 88.8838 77.9776 88.83 77.8484L89.0543 78.333C88.9197 78.0503 88.83 77.7514 88.7852 77.4445L88.8659 77.9776C88.8211 77.6868 88.8211 77.388 88.8659 77.0891L88.7852 77.6222C88.7852 77.6222 88.7852 77.5737 88.7942 77.5495C88.8838 77.283 88.9018 77.0164 88.83 76.7418C88.8121 76.4752 88.7314 76.2248 88.561 75.9906C88.4175 75.7564 88.2291 75.5625 87.9869 75.4252C87.7717 75.2475 87.5205 75.1263 87.2246 75.0617L86.6326 74.989C86.229 74.989 85.8523 75.0859 85.5025 75.2636L85.0451 75.5787C84.767 75.829 84.5787 76.1279 84.4711 76.4671V76.4833Z"
                                fill="#585353" />
                            <path
                                d="M91.0988 82.8158C95.2604 78.3249 95.9152 72.4043 95.5116 66.7744C95.4309 65.684 94.5339 64.7551 93.2693 64.7551C92.1123 64.7551 90.9463 65.684 91.027 66.7744C91.1167 68.0103 91.1616 69.2541 91.1257 70.49C91.1078 71.1119 91.0719 71.7339 91.0091 72.3558C90.9373 73.0424 90.9104 73.2605 90.7849 73.8824C90.5427 75.0698 90.2108 76.2652 89.6727 77.3799C89.7355 77.2425 89.7086 77.291 89.601 77.5172C89.5292 77.6545 89.4574 77.7918 89.3857 77.921C89.2332 78.1876 89.0718 78.4541 88.9014 78.7126C88.5964 79.173 88.1928 79.6819 87.9327 79.9646C87.1614 80.8046 87.0268 82 87.9327 82.8239C88.7309 83.5428 90.3274 83.6639 91.1078 82.8239L91.0988 82.8158Z"
                                fill="#585353" />
                            <path
                                d="M81.3495 9.8865C83.7622 9.22416 86.0942 9.43417 88.6145 9.66841C91.2693 9.91073 93.9152 10.153 96.5701 10.3954C97.7809 10.5084 98.8123 9.38571 98.8123 8.37605C98.8123 7.1887 97.7809 6.46983 96.5701 6.35675C93.8166 6.10635 91.063 5.85596 88.3095 5.59748C85.556 5.33901 82.8743 5.25016 80.1566 5.99327C78.9996 6.30828 78.2642 7.40679 78.5871 8.48106C78.9099 9.55533 80.1835 10.2096 81.3495 9.89457V9.8865Z"
                                fill="#585353" />
                            <path
                                d="M80.7309 9.5311C83.9777 9.3534 87.2246 9.18377 90.4624 9.00607C91.6284 8.94146 92.7585 8.12566 92.7047 6.98677C92.6508 5.9448 91.7181 4.90284 90.4624 4.96746C87.2156 5.14516 83.9688 5.31478 80.7309 5.49248C79.565 5.5571 78.4349 6.3729 78.4887 7.51179C78.5425 8.55375 79.4753 9.59571 80.7309 9.5311Z"
                                fill="#585353" />
                            <path
                                d="M83 8.02885C85.8881 8.02885 85.8881 3.99023 83 3.99023C80.112 3.99023 80.112 8.02885 83 8.02885Z"
                                fill="#585353" />
                            <path
                                d="M109.503 8.02885C112.391 8.02885 112.391 3.99023 109.503 3.99023C106.615 3.99023 106.615 8.02885 109.503 8.02885Z"
                                fill="#585353" />
                            <path
                                d="M80.7306 9.66042C84.085 9.67658 87.4395 9.69273 90.785 9.71696C91.8881 9.71696 92.8568 8.94155 92.9913 7.9642C93.1079 7.07571 92.507 5.88836 91.3859 5.75104C86.0762 5.09679 80.7485 4.74946 75.385 4.79793C74.2818 4.80601 73.3132 5.55719 73.1786 6.55069C73.0531 7.48765 73.6719 8.56192 74.7841 8.76385C79.1162 9.57157 83.5559 9.88659 87.9776 9.62812C89.1885 9.55542 90.2199 8.7477 90.2199 7.60881C90.2199 6.56684 89.1885 5.5168 87.9776 5.5895C83.9415 5.82374 79.9144 5.60565 75.977 4.87062L75.385 8.83655C80.327 8.79616 85.2959 9.03848 90.193 9.64427L90.785 5.67835C87.4305 5.66219 84.0761 5.64604 80.7306 5.62181C79.5198 5.62181 78.4883 6.55069 78.4883 7.64111C78.4883 8.73154 79.5108 9.65235 80.7306 9.66042Z"
                                fill="#585353" />
                        </g>
                    </svg>
                </div>
                <div class="flex justify-center mt-16">
                    <div class="w-48">
                        <canvas id="Contador1"></canvas>
                    </div>

                      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                      <script>
                        const ctx = document.getElementById('Contador1');

                        new Chart(ctx, {
                          type: 'doughnut',
                          data: {
                            // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                            datasets: [{
                              label: '# of Votes',
                              data: [12, 19, 3, 5, 2, 3],
                              borderWidth: 1
                            }]
                          },
                          options: {
                            scales: {
                              y: {
                                beginAtZero: true
                              }
                            }
                          }
                        });
                      </script>

                </div>
            </div>
            <div class="w-1/2 h-full">
                    <div class="w-full text-center px-8 text-xl">

                        <h1 class="my-6 font-semibold">Datos Adicionales</h1>

                        <div class="flex justify-center gap-6 my-4">
                            <h2>Estado:</h2>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activo</span>
                            </label>
                        </div>
                        <div class="flex gap-8 justify-center my-8">
                            <div class="flex items-center">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Principal</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Secundario</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <form action="{{ route('Contador.store') }}" class="max-w-full px-8 flex flex-col text-sm" method="POST">
                            @csrf
                            <div class="flex justify-center gap-4">

                                <input type="text" class="w-full rounded-xl" name="nombre_contador" placeholder="Nombre del Contador">
                                <input type="number" class="w-full rounded-xl" name="num_contador" placeholder="Número de Contador">
                            </div>
                            <div class="flex justify-center gap-4 my-4">
                                <input type="text" class="rounded-xl w-1/2" name="barrio" placeholder="Barrio">
                                <input type="text" class="rounded-xl w-1/2" name="direccion" placeholder="Dirección">
                            </div>

                            <div class="flex justify-center gap-4">
                                <select id="estrato" name="estrato" class="h-10 w-1/2 text-sm pl-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Estrato</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>

                                <select id="categoria" name="categoria" class="h-10 w-1/2 text-sm pl-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Categoria</option>
                                    <option value="anologo">Analógico</option>
                                    <option value="digital">Digital</option>

                                </select>
                            </div>

                            <div class="flex justify-center gap-4 my-4">
                                <input type="number" class="rounded-xl w-1/2" name="tarifa_agua" placeholder="Tarifa Agua">
                                <input type="number" class="rounded-xl w-1/2" name="tarifa_alcantarillado" placeholder="Tarifa Alcantarillado">
                            </div>
                            <div class="flex justify-center gap-4 mb-4">
                                <input type="number" class="rounded-xl w-1/2" name="ultimo_consumo" placeholder="Último Consumo">
                                <input type="date" class="rounded-xl w-1/2" name="fecha_proximo_pago" placeholder="Fecha Próximo Pago">
                            </div>
                        </form>
                    </div>
                <div class="text-center gap-4 mt-2">
                    <button type="submit" class="p-2 rounded-2xl text-white bg-azulBotones hover:bg-cyan-700">Guardar Cambios</button>
                </div>
            </div>
        </div>

    @endsection

