@extends('layouts.app')

@php
// ── Reusable SVG snippets ─────────────────────────────────────────────────────
$star14 = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><path d="M3.7081 12.9544C3.41861 13.1128 3.09011 12.8352 3.14861 12.4808L3.7711 8.69694L1.12886 6.01223C0.882112 5.76104 1.01036 5.30186 1.34111 5.25226L5.0146 4.69548L6.6526 1.23399C6.80035 0.922003 7.2001 0.922003 7.34785 1.23399L8.98584 4.69548L12.6593 5.25226C12.9901 5.30186 13.1183 5.76104 12.8708 6.01223L10.2293 8.69694L10.8518 12.4808C10.9103 12.8352 10.5818 13.1128 10.2923 12.9544L6.9991 11.1497L3.7081 12.9544Z"></path></svg>';

$star15 = '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"><path d="M0.376831 8.16821C-0.247095 8.54593 -0.0579659 9.49862 0.662688 9.60837C1.24211 9.69666 1.52052 10.3701 1.17304 10.8431C0.740845 11.4312 1.27942 12.2389 1.98713 12.0639C2.55609 11.9231 3.07065 12.4387 2.9302 13.0088C2.75556 13.718 3.56158 14.2577 4.14855 13.8246C4.62054 13.4764 5.29275 13.7554 5.38073 14.336C5.49024 15.0581 6.44099 15.2476 6.81798 14.6224C7.12107 14.1198 7.84864 14.1198 8.15171 14.6224C8.52867 15.2476 9.47943 15.0581 9.58896 14.336C9.67707 13.7554 10.3492 13.4764 10.8211 13.8246C11.4081 14.2577 12.2142 13.718 12.0395 13.0088C11.899 12.4387 12.4136 11.9231 12.9826 12.0639C13.6903 12.2389 14.2289 11.4312 13.7967 10.8431C13.4492 10.3701 13.7276 9.69653 14.307 9.60837C15.0276 9.49864 15.2168 8.54597 14.5929 8.16821C14.0912 7.86452 14.0912 7.13547 14.5929 6.83178C15.2168 6.45407 15.0277 5.50138 14.307 5.39162C13.7276 5.30334 13.4492 4.62989 13.7967 4.15695C14.2289 3.56879 13.6903 2.76112 12.9826 2.93613C12.4136 3.07687 11.8991 2.5613 12.0395 1.99115C12.2141 1.28199 11.4081 0.742345 10.8211 1.17541C10.3492 1.52356 9.67695 1.2446 9.58896 0.664029C9.47945 -0.0580599 8.5287 -0.247606 8.15171 0.377594C7.84863 0.880237 7.12106 0.880237 6.81798 0.377594C6.44103 -0.247596 5.49027 -0.0580833 5.38073 0.664029C5.29263 1.24462 4.62054 1.5236 4.14855 1.17541C3.56158 0.742345 2.75554 1.28201 2.9302 1.99115C3.07065 2.56126 2.55612 3.07686 1.98713 2.93613C1.2794 2.76113 0.740845 3.56879 1.17304 4.15695C1.52049 4.62989 1.24209 5.30346 0.662688 5.39162C-0.0579425 5.50136 -0.247105 6.45403 0.376831 6.83178C0.878459 7.13548 0.878459 7.86453 0.376831 8.16821Z"/></svg>';

// ── Feature icons (32×32 SVGs) ────────────────────────────────────────────────
$fi = [
    '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M27.9398 4.40669H26.4543C26.3522 4.14313 26.0967 3.95538 25.7975 3.95538C25.5115 3.95538 25.3987 3.73663 25.3708 3.66957C25.343 3.6025 25.2682 3.368 25.4704 3.16582C25.7452 2.89107 25.7452 2.44407 25.4704 2.16932L24.8953 1.5942C24.6205 1.31951 24.1735 1.31945 23.8987 1.5942C23.6965 1.79651 23.462 1.72163 23.395 1.69382C23.3279 1.66607 23.1092 1.5532 23.1092 1.26713C23.1092 0.878628 22.793 0.562503 22.4045 0.562503H21.5912C21.2027 0.562503 20.8867 0.878628 20.8867 1.26713C20.8867 1.5532 20.6679 1.66607 20.6008 1.69382C20.5338 1.72157 20.2993 1.79645 20.097 1.59407C19.8222 1.31951 19.3752 1.31951 19.1005 1.59413L18.5253 2.16932C18.2507 2.44407 18.2507 2.89107 18.5253 3.16582C18.7277 3.36807 18.6528 3.60257 18.625 3.66963C18.5973 3.7367 18.4844 3.95545 18.1983 3.95545C17.8992 3.95545 17.6437 4.14313 17.5416 4.40676H4.56878C3.27078 4.40676 2.21484 5.46276 2.21484 6.7607V22.0845C2.21484 23.3825 3.27084 24.4385 4.56878 24.4385H12.103C12.0808 25.8908 11.7317 27.3523 11.3398 28.2295H9.76016C8.87572 28.2295 8.15609 28.949 8.15609 29.8335C8.15609 30.718 8.87572 31.4376 9.76016 31.4376H22.2397C23.1242 31.4376 23.8437 30.7181 23.8437 29.8336C23.8437 28.9491 23.1242 28.2295 22.2397 28.2295H20.6555C20.2452 27.3371 19.8735 25.8706 19.8381 24.4386H27.4311C28.7291 24.4386 29.7851 23.3826 29.7851 22.0846V6.25238C29.785 5.2347 28.9572 4.40669 27.9398 4.40669ZM3.08978 6.7608C3.08978 5.94526 3.75328 5.28182 4.56878 5.28182H17.4937V5.47345C17.4937 5.86195 17.8098 6.17807 18.1983 6.17807C18.4844 6.17807 18.5972 6.39682 18.625 6.46388C18.6528 6.53095 18.7277 6.76545 18.5254 6.9677C18.2507 7.24245 18.2507 7.68945 18.5254 7.9642L19.1005 8.53932C19.3753 8.81407 19.8222 8.81407 20.097 8.53932C20.2998 8.33657 20.5342 8.41132 20.6011 8.43907C20.6681 8.46682 20.8867 8.57963 20.8867 8.86638C20.8867 9.25488 21.2027 9.57101 21.5912 9.57101H22.4045C22.793 9.57101 23.1092 9.25488 23.1092 8.86638C23.1092 8.58032 23.3279 8.46751 23.395 8.4397C23.462 8.41195 23.6965 8.33701 23.8988 8.53938C24.1737 8.81413 24.6207 8.81407 24.8953 8.53932L25.4705 7.9642C25.7452 7.68945 25.7452 7.24245 25.4705 6.9677C25.2682 6.76545 25.3431 6.53095 25.3708 6.46388C25.3986 6.39682 25.5115 6.17807 25.7975 6.17807C26.186 6.17807 26.5022 5.86195 26.5022 5.47345V5.28182H27.9397C28.4747 5.28182 28.91 5.7172 28.91 6.25238V19.7516H3.08978V6.7608ZM17.491 22.0951C17.491 22.2111 17.4449 22.3224 17.3629 22.4044C17.2808 22.4865 17.1696 22.5326 17.0535 22.5326H14.9463C14.8302 22.5326 14.719 22.4865 14.6369 22.4044C14.5549 22.3224 14.5088 22.2111 14.5088 22.0951C14.5088 21.979 14.5549 21.8678 14.6369 21.7857C14.719 21.7037 14.8302 21.6576 14.9463 21.6576H17.0535C17.1696 21.6576 17.2808 21.7037 17.3629 21.7857C17.4449 21.8678 17.491 21.979 17.491 22.0951ZM21.998 7.45826C23.3167 7.45826 24.3895 6.38545 24.3895 5.06682C24.3895 3.74813 23.3167 2.67532 21.998 2.67532C20.6793 2.67532 19.6065 3.74813 19.6065 5.06682C19.6065 6.38545 20.6793 7.45826 21.998 7.45826Z"/></svg>',

    '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><g><path d="M7.31081 5.90445C7.43513 5.90445 7.55436 5.85506 7.64227 5.76715C7.73018 5.67925 7.77956 5.56002 7.77956 5.4357C7.77956 5.31138 7.73018 5.19215 7.64227 5.10424C7.55436 5.01633 7.43513 4.96695 7.31081 4.96695C7.18649 4.96695 7.06726 5.01633 6.97936 5.10424C6.89145 5.19215 6.84206 5.31138 6.84206 5.4357C6.84206 5.56002 6.89145 5.67925 6.97936 5.76715C7.06726 5.85506 7.18649 5.90445 7.31081 5.90445ZM3.56081 5.90445C3.68513 5.90445 3.80436 5.85506 3.89227 5.76715C3.98018 5.67925 4.02956 5.56002 4.02956 5.4357C4.02956 5.31138 3.98018 5.19215 3.89227 5.10424C3.80436 5.01633 3.68513 4.96695 3.56081 4.96695C3.43649 4.96695 3.31726 5.01633 3.22936 5.10424C3.14145 5.19215 3.09206 5.31138 3.09206 5.4357C3.09206 5.56002 3.14145 5.67925 3.22936 5.76715C3.31726 5.85506 3.43649 5.90445 3.56081 5.90445ZM5.43581 5.90445C5.56013 5.90445 5.67936 5.85506 5.76727 5.76715C5.85518 5.67925 5.90456 5.56002 5.90456 5.4357C5.90456 5.31138 5.85518 5.19215 5.76727 5.10424C5.67936 5.01633 5.56013 4.96695 5.43581 4.96695C5.31149 4.96695 5.19226 5.01633 5.10436 5.10424C5.01645 5.19215 4.96706 5.31138 4.96706 5.4357C4.96706 5.56002 5.01645 5.67925 5.10436 5.76715C5.19226 5.85506 5.31149 5.90445 5.43581 5.90445Z"/><path d="M31.5312 31.0625H31.0625V24.0819C31.0625 22.253 29.9818 20.5923 28.3041 19.8486L25.8337 18.7898C26.4348 18.6001 26.9779 18.2618 27.4198 17.7926C28.0864 17.0848 28.4688 16.1244 28.4688 15.1576C28.4688 14.2692 28.1584 13.4307 27.5711 12.7325C26.8358 11.8584 26.4324 10.7529 26.4319 9.6107V7.36445C26.4319 5.39707 25.6657 3.54782 24.2746 2.15739C22.8834 0.766136 21.034 1.05769e-05 19.0669 1.05769e-05C15.0061 1.05769e-05 11.7025 3.30364 11.7025 7.36439V9.53751C11.7028 10.718 11.2388 11.8448 10.4849 12.7531C9.53613 13.8963 9.339 15.4418 9.97056 16.7866C10.4393 17.7849 11.2848 18.5021 12.297 18.8056L9.84387 19.8724C8.12281 20.5966 7.01069 22.2711 7.01069 24.1382V29.6563C7.01069 29.9152 7.2205 30.1251 7.47944 30.1251C7.73837 30.1251 7.94819 29.9152 7.94819 29.6563V24.1382C7.94819 22.6493 8.835 21.314 10.2126 20.7343L13.2875 19.3972V22.2188H11.8748C11.6159 22.219 11.3685 22.3288 11.189 22.5196C11.0095 22.7103 10.9129 22.9663 10.921 23.2248L11.6937 30.5141C11.7143 30.7101 11.7963 30.8939 11.9285 31.0388C12.0607 31.1837 12.235 31.2819 12.4264 31.3185H19.5736C19.7643 31.2822 19.9377 31.1846 20.0696 31.0402C20.2015 30.8959 20.2832 30.7127 20.3038 30.5174L21.0765 23.2281C21.0846 22.9696 20.988 22.7136 20.8085 22.5229C20.629 22.3321 20.3816 22.2223 20.1227 22.2221H18.71V19.3847L21.7849 20.7218C23.1687 21.299 24.0581 22.6363 24.0581 24.1255V31.0449H0.46875C0.209812 31.0449 0 31.2547 0 31.5137C0 31.7726 0.209812 31.9824 0.46875 31.9824H31.5312C31.7902 31.9824 32 31.7726 32 31.5137C32 31.2547 31.7902 31.0449 31.5312 31.0449V31.0625Z"/></g></svg>',

    '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M18.4261 27.19C18.265 27.19 18.1105 27.254 17.9966 27.3679C17.8827 27.4818 17.8187 27.6363 17.8187 27.7974V30.471C17.8183 30.5244 17.7968 30.5755 17.7588 30.6132C17.7209 30.6509 17.6696 30.672 17.6162 30.672H14.3764C14.3227 30.672 14.2712 30.6507 14.2332 30.6127C14.1953 30.5747 14.1739 30.5232 14.1739 30.4695V27.8004C14.174 27.6602 14.1256 27.5243 14.0369 27.4157C13.9482 27.3071 13.8246 27.2326 13.6872 27.2047C12.2411 26.9107 10.8658 26.3388 9.63754 25.5208C9.52059 25.4437 9.38064 25.4093 9.24128 25.4234C9.10193 25.4375 8.97169 25.4992 8.87252 25.5981L6.97652 27.4897C6.93842 27.5277 6.88678 27.5491 6.83294 27.5491C6.7791 27.5491 6.72747 27.5277 6.68936 27.4897L4.39871 25.199C4.36085 25.1608 4.33961 25.1092 4.33961 25.0554C4.33961 25.0016 4.36085 24.95 4.39871 24.9118L6.29323 23.0181C6.39181 22.9186 6.45299 22.7881 6.46641 22.6487C6.47983 22.5093 6.44466 22.3695 6.36686 22.253C5.54883 21.0248 4.97694 19.6495 4.68292 18.2033C4.65593 18.0659 4.58225 17.942 4.47436 17.8526C4.36648 17.7632 4.23102 17.7139 4.09093 17.713H1.41739C1.36369 17.713 1.31219 17.6916 1.27422 17.6536C1.23624 17.6157 1.21491 17.5642 1.21491 17.5105V14.2707C1.21549 14.2173 1.23705 14.1663 1.27494 14.1287C1.31283 14.0911 1.364 14.0699 1.41739 14.0697H4.09093C4.23102 14.0697 4.36648 14.0218 4.47436 13.9339C4.58225 13.8459 4.65593 13.722 4.68292 13.5846C4.97694 12.1384 5.54883 10.7631 6.36686 9.53404C6.44466 9.41763 6.47983 9.27783 6.46641 9.13838C6.45299 8.99893 6.39172 8.86842 6.29301 8.76901L4.39871 6.87228C4.36085 6.83409 4.33961 6.78248 4.33961 6.7287C4.33961 6.67492 4.36085 6.62332 4.39871 6.58512L6.68936 4.29447C6.72747 4.25643 6.7791 4.23506 6.83294 4.23506C6.88678 4.23506 6.93842 4.25643 6.97652 4.29447L8.87031 6.18899C8.96948 6.28789 9.09972 6.34959 9.23907 6.36367C9.37843 6.37775 9.51838 6.34336 9.63533 6.2663C10.8637 5.44857 12.239 4.8767 13.685 4.58236C13.8224 4.55449 13.946 4.47995 14.0347 4.37138C14.1234 4.26281 14.1718 4.12689 14.1717 3.98669V1.31315C14.1718 1.2864 14.1772 1.25994 14.1876 1.23527C14.1979 1.2106 14.213 1.18822 14.232 1.16941C14.2511 1.1506 14.2736 1.13572 14.2984 1.12564C14.3232 1.11556 14.3497 1.11047 14.3764 1.11067H17.6162C17.6698 1.11086 17.7212 1.13226 17.7591 1.17019C17.7971 1.20812 17.8185 1.25951 17.8187 1.31315V3.98669C17.8187 4.1478 17.8827 4.30231 17.9966 4.41622C18.1105 4.53014 18.265 4.59414 18.4261 4.59414C18.5872 4.59414 18.7417 4.53014 18.8557 4.41622C18.9696 4.30231 19.0336 4.1478 19.0336 3.98669V1.31315C19.0334 0.937162 18.884 0.576603 18.6183 0.310599C18.3526 0.0445941 17.9922 -0.105128 17.6162 -0.105713H14.3764C14.0007 -0.105129 13.6405 0.044391 13.3748 0.310077C13.1091 0.575764 12.9596 0.935944 12.959 1.31168V3.5022C11.6985 3.81016 10.4932 4.31112 9.38573 4.98733L7.83506 3.43593C7.56508 3.1782 7.20619 3.0344 6.83294 3.0344C6.4597 3.0344 6.1008 3.1782 5.83083 3.43593L3.54017 5.72659C3.27462 5.99248 3.12546 6.35291 3.12546 6.7287C3.12546 7.1045 3.27462 7.46492 3.54017 7.73082L5.08642 9.28149C4.41514 10.3896 3.91799 11.5943 3.61233 12.8533H1.41739C1.04166 12.8539 0.681477 13.0034 0.41579 13.2691C0.150104 13.5348 0.000584199 13.895 0 14.2707V17.5105C0.000194562 17.8865 0.149542 18.247 0.415271 18.513C0.680999 18.779 1.0414 18.9287 1.41739 18.9293H3.60497C3.91293 20.1898 4.41389 21.3952 5.0901 22.5026L3.54385 24.0533C3.2783 24.3192 3.12915 24.6796 3.12915 25.0554C3.12915 25.4312 3.2783 25.7916 3.54385 26.0575L5.83451 28.3482C6.10423 28.6064 6.46322 28.7506 6.83663 28.7506C7.21003 28.7506 7.56902 28.6064 7.83874 28.3482L9.38941 26.8019C10.497 27.4777 11.7023 27.9784 12.9627 28.2863V30.4739C12.9641 30.8485 13.1134 31.2074 13.3782 31.4723C13.643 31.7373 14.0018 31.8868 14.3764 31.8884H17.6162C17.9919 31.8878 18.3521 31.7383 18.6178 31.4726C18.8835 31.2069 19.033 30.8467 19.0336 30.471V27.8004C19.034 27.7204 19.0185 27.6411 18.9882 27.567C18.9578 27.493 18.9131 27.4257 18.8567 27.3689C18.8003 27.3122 18.7332 27.2672 18.6593 27.2365C18.5854 27.2058 18.5061 27.19 18.4261 27.19Z"/></svg>',

    '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M29.6145 21.5C29.5341 21.5 29.4548 21.4805 29.3834 21.4433C29.3121 21.406 29.2508 21.3521 29.2047 21.2861C29.1587 21.22 29.1293 21.1439 29.119 21.0641C29.1087 20.9842 29.1178 20.9031 29.1455 20.8275C29.9132 18.7322 30.1688 16.4836 29.8912 14.2694C29.6135 12.0552 28.8105 9.93944 27.5492 8.09853C26.2879 6.25761 24.6048 4.74488 22.6402 3.68645C20.6756 2.62802 18.4864 2.05455 16.2552 2.01386C14.024 1.97317 11.8154 2.46644 9.81357 3.45254C7.81169 4.43863 6.07455 5.88899 4.74695 7.68269C3.41935 9.4764 2.53977 11.5615 2.18154 13.7641C1.8233 15.9667 1.99679 18.2231 2.68754 20.345C2.71077 20.4081 2.72105 20.4753 2.71774 20.5424C2.71443 20.6096 2.69761 20.6754 2.66829 20.7359C2.63897 20.7964 2.59775 20.8504 2.54709 20.8946C2.49643 20.9388 2.43737 20.9723 2.37345 20.9932C2.30953 21.014 2.24206 21.0218 2.17508 21.016C2.1081 21.0101 2.04297 20.9909 1.98361 20.9593C1.92424 20.9277 1.87185 20.8845 1.82957 20.8322C1.78729 20.78 1.75599 20.7197 1.73754 20.655C0.998075 18.3816 0.812723 15.9643 1.19693 13.6047C1.58114 11.2451 2.52378 9.01151 3.94629 7.09009C5.36879 5.16867 7.22995 3.61508 9.37464 2.55883C11.5193 1.50258 13.8854 0.974247 16.2757 1.01788C18.666 1.06151 21.0112 1.67584 23.116 2.80966C25.2207 3.94349 27.0239 5.56396 28.3753 7.53601C29.7268 9.50807 30.5873 11.7746 30.8851 14.1466C31.1829 16.5187 30.9095 18.9276 30.0875 21.1725C30.052 21.2692 29.9875 21.3525 29.9029 21.4111C29.8182 21.4698 29.7175 21.5008 29.6145 21.5Z"/><path d="M16 18C15.8674 18 15.7402 17.9473 15.6464 17.8536C15.5527 17.7598 15.5 17.6326 15.5 17.5V1.5C15.5 1.36739 15.5527 1.24021 15.6464 1.14645C15.7402 1.05268 15.8674 1 16 1C16.1326 1 16.2598 1.05268 16.3536 1.14645C16.4473 1.24021 16.5 1.36739 16.5 1.5V17.5C16.5 17.6326 16.4473 17.7598 16.3536 17.8536C16.2598 17.9473 16.1326 18 16 18Z"/><path d="M28.5 9.5H3.5C3.36739 9.5 3.24021 9.44732 3.14645 9.35355C3.05268 9.25979 3 9.13261 3 9C3 8.86739 3.05268 8.74021 3.14645 8.64645C3.24021 8.55268 3.36739 8.5 3.5 8.5H28.5C28.6326 8.5 28.7598 8.55268 28.8536 8.64645C28.9473 8.74021 29 8.86739 29 9C29 9.13261 28.9473 9.25979 28.8536 9.35355C28.7598 9.44732 28.6326 9.5 28.5 9.5Z"/><path d="M15.5 25.5C14.8078 25.5 14.1311 25.2947 13.5555 24.9101C12.9799 24.5256 12.5313 23.9789 12.2664 23.3394C12.0015 22.6999 11.9322 21.9961 12.0673 21.3172C12.2023 20.6383 12.5356 20.0146 13.0251 19.5251C13.5146 19.0356 14.1383 18.7023 14.8172 18.5673C15.4961 18.4322 16.1999 18.5015 16.8394 18.7664C17.4789 19.0313 18.0256 19.4799 18.4101 20.0555C18.7947 20.6311 19 21.3078 19 22C18.9989 22.9279 18.6299 23.8176 17.9737 24.4737C17.3176 25.1299 16.4279 25.4989 15.5 25.5ZM15.5 19.5C15.0055 19.5 14.5222 19.6466 14.1111 19.9213C13.7 20.196 13.3795 20.5865 13.1903 21.0433C13.0011 21.5001 12.9516 22.0028 13.048 22.4877C13.1445 22.9727 13.3826 23.4181 13.7322 23.7678C14.0819 24.1174 14.5273 24.3555 15.0123 24.452C15.4972 24.5484 15.9999 24.4989 16.4567 24.3097C16.9135 24.1205 17.304 23.8 17.5787 23.3889C17.8534 22.9778 18 22.4945 18 22C17.9992 21.3372 17.7356 20.7018 17.2669 20.2331C16.7982 19.7644 16.1628 19.5008 15.5 19.5Z"/></svg>',
];

// ── Service data ──────────────────────────────────────────────────────────────
$services = [
    'web-development' => [
        'title'        => 'Web & App Development - Sigmix Labs',
        'breadcrumb'   => 'Web & App Development',
        'heading'      => 'Web & App <span>Development.</span>',
        'pageH1'       => 'AI-driven development and AI-powered applications — built faster, smarter, and ready for the future.',
        'description'  => 'At Sigmix Labs, AI is at the heart of how we build and what we build. Our engineers leverage AI-driven development tools — Cursor, Claude, GitHub Copilot, and similar platforms — to write better code faster, reduce bugs earlier, and ship production-ready software in a fraction of the traditional timeline. Beyond the development process itself, we also build AI-powered features directly into your products: intelligent chatbots, LLM integrations, recommendation engines, and predictive dashboards that give your users a genuinely smarter experience.',
        'features'     => ['Custom Web Development', 'Mobile App Development', 'API & Third-Party Integration', 'Progressive Web Apps (PWA)', 'E-commerce Platforms', 'Maintenance & Support'],
        'faq' => [
            ['q' => 'What does AI-driven development mean at Sigmix Labs?',         'a' => 'It means our engineers use AI tools — Cursor, Claude, GitHub Copilot, and similar platforms — throughout the development workflow. This accelerates coding, improves code quality, catches bugs earlier, and lets us deliver production-ready software significantly faster than traditional methods.'],
            ['q' => 'Do you also build AI-powered features into products?',        'a' => 'Yes, both contexts apply. Beyond using AI to develop faster, we integrate AI directly into your product — LLM-powered chatbots, intelligent search, recommendation engines, and predictive analytics — so your end users benefit from smarter experiences.'],
            ['q' => 'Which AI development tools does your team use?',              'a' => 'Our team actively uses Cursor (AI-first code editor), Claude and ChatGPT for reasoning and code review, GitHub Copilot for in-editor assistance, and various AI testing tools. We evaluate new tools continuously and adopt what genuinely improves delivery quality.'],
            ['q' => 'Can you add AI features to our existing application?',        'a' => 'Absolutely. We specialise in integrating AI capabilities into live codebases — adding intelligent search, personalisation, anomaly detection, or generative features without disrupting your existing infrastructure. A technical audit guides the integration approach.'],
            ['q' => 'How long does a typical AI-assisted project take?',           'a' => 'AI-driven development typically cuts timelines by 30–50%. A project that might take 16 weeks traditionally can often ship in 8–10 weeks. We provide a detailed phased roadmap after the discovery workshop so you know exactly what to expect.'],
        ],
        'process' => [
            ['step' => '01', 'title' => 'Discovery & Requirements', 'desc' => 'We work closely with you to understand your goals, target audience, and technical requirements to lay a solid foundation.'],
            ['step' => '02', 'title' => 'UI/UX Design',              'desc' => 'Our designers create intuitive wireframes and high-fidelity prototypes focused on delivering great user experiences.'],
            ['step' => '03', 'title' => 'Development',               'desc' => 'Our engineers build your application using agile sprints with regular demos, keeping you informed throughout.'],
            ['step' => '04', 'title' => 'QA & Testing',              'desc' => 'Rigorous testing across devices and environments ensures your product is bug-free, secure, and production-ready.'],
            ['step' => '05', 'title' => 'Launch & Support',          'desc' => 'We handle deployment and provide ongoing support to ensure your application performs flawlessly after going live.'],
        ],
        'featureTitle' => 'Web & App <span>Development Capabilities.</span>',
        'featureItems' => [
            ['icon' => 0, 'title' => 'Full-Stack Development',      'desc' => 'End-to-end development from database architecture to pixel-perfect front-end interfaces, ensuring seamless functionality throughout.'],
            ['icon' => 1, 'title' => 'API & Integration Services',  'desc' => 'Robust API development and integration with third-party services, payment gateways, CRMs, ERPs, and cloud platforms.'],
            ['icon' => 2, 'title' => 'Cloud-Native Architecture',   'desc' => 'Scalable, containerised solutions built for cloud environments — AWS, GCP, or Azure — with CI/CD pipelines for rapid delivery.'],
            ['icon' => 3, 'title' => 'Performance & Security',      'desc' => 'Optimised code, database tuning, CDN configuration, and security hardening to keep your application fast and secure.'],
        ],
        'toolsTitle' => 'Our Development <span>Technology Stack.</span>',
        'tools' => [
            ['icon' => 'laravel-icon.svg',    'name' => 'Laravel'],
            ['icon' => 'vue-icon.svg',        'name' => 'Vue.js'],
            ['icon' => 'react-icon.svg',      'name' => 'React'],
            ['icon' => 'tailwind-icon.svg',   'name' => 'Tailwind CSS'],
            ['icon' => 'livewire-icon.svg',   'name' => 'Livewire'],
            ['icon' => 'alpine-icon.svg',     'name' => 'Alpine.js'],
            ['icon' => 'nodejs-icon.svg',     'name' => 'Node.js'],
            ['icon' => 'python-icon.svg',     'name' => 'Python'],
            ['icon' => 'typescript-icon.svg', 'name' => 'TypeScript'],
            ['icon' => 'php-icon.svg',        'name' => 'PHP'],
            ['icon' => 'mysql-icon.svg',      'name' => 'MySQL'],
            ['icon' => 'docker-icon.svg',     'name' => 'Docker'],
            ['icon' => 'aws-icon.svg',        'name' => 'AWS'],
        ],
    ],

    'consulting' => [
        'title'        => 'IT Consulting Services - Sigmix Labs',
        'breadcrumb'   => 'Consulting Services',
        'heading'      => 'IT Consulting <span>Services.</span>',
        'pageH1'       => 'Strategic IT consulting to accelerate your digital transformation journey.',
        'description'  => 'Our expert IT consultants partner with your business to navigate complex technology challenges, define strategic roadmaps, and drive sustainable growth. We bring deep industry expertise and proven methodologies to align technology investments with your core business objectives — from strategy formulation to full-scale digital transformation.',
        'features'     => ['IT Strategy & Roadmap', 'Technology Assessment', 'Digital Transformation', 'Process Optimisation', 'Vendor Management', 'Change Management'],
        'faq' => [
            ['q' => 'What does an IT consulting engagement typically cover?',  'a' => 'Engagements range from infrastructure assessments and technology audits to full digital transformation programmes, each tailored to your specific business needs and maturity level.'],
            ['q' => 'How do you assess our current technology landscape?',     'a' => 'We conduct a comprehensive audit covering infrastructure, applications, processes, data management, and security posture, then deliver a prioritised gap analysis with recommendations.'],
            ['q' => 'Which industries do you serve?',                          'a' => 'We work across finance, healthcare, retail, manufacturing, telecom, education, and public sector — bringing sector-specific expertise to each engagement.'],
            ['q' => 'How long does a consulting project typically take?',      'a' => 'A focused assessment may take 2–4 weeks, while a broader digital transformation programme can span several months. We offer both short and long-term engagement models.'],
            ['q' => 'Do you help with technology implementation as well?',     'a' => 'Yes. We offer end-to-end services — from strategy and planning through implementation, change management, and post-deployment optimisation — one accountable partner throughout.'],
        ],
        'process' => [
            ['step' => '01', 'title' => 'Discovery & Assessment',   'desc' => 'We evaluate your current technology landscape, business processes, and goals to establish a clear baseline.'],
            ['step' => '02', 'title' => 'Strategy Development',     'desc' => 'Our consultants develop a tailored IT strategy and roadmap aligned with your short and long-term business objectives.'],
            ['step' => '03', 'title' => 'Planning & Prioritisation','desc' => 'We create a detailed implementation plan with prioritised initiatives, resource requirements, and KPIs.'],
            ['step' => '04', 'title' => 'Execution Support',        'desc' => 'Our team provides hands-on guidance and PMO oversight to deliver strategic initiatives on time and budget.'],
            ['step' => '05', 'title' => 'Review & Optimisation',    'desc' => 'We continuously monitor outcomes against KPIs, adapting the strategy to changing business needs.'],
        ],
        'featureTitle' => 'IT Consulting <span>Service Capabilities.</span>',
        'featureItems' => [
            ['icon' => 0, 'title' => 'Strategic Advisory',            'desc' => 'C-level guidance on technology investment decisions, IT governance, and building a long-term strategy aligned to business goals.'],
            ['icon' => 1, 'title' => 'Technology Assessment',         'desc' => 'Comprehensive evaluation of your current systems, architecture, and processes to identify gaps, risks, and improvement opportunities.'],
            ['icon' => 2, 'title' => 'Process Re-engineering',        'desc' => 'Redesigning IT and business workflows to eliminate inefficiencies, reduce costs, and improve speed-to-market through automation.'],
            ['icon' => 3, 'title' => 'ROI & Performance Measurement', 'desc' => 'Establishing clear KPIs and measurement frameworks to ensure technology investments deliver tangible, measurable business value.'],
        ],
        'toolsTitle' => 'Our Consulting <span>Tools & Platforms.</span>',
        'tools' => [
            ['icon' => 'figma-icon.svg',  'name' => 'Figma'],
            ['icon' => 'vs-icon.svg',     'name' => 'MS Visio'],
            ['icon' => 'git-icon.svg',    'name' => 'Git'],
            ['icon' => 'aws-icon.svg',    'name' => 'AWS'],
            ['icon' => 'gitlab-icon.svg', 'name' => 'GitLab'],
            ['icon' => 'mysql-icon.svg',  'name' => 'Data Analytics'],
        ],
    ],

    'cyber-security' => [
        'title'        => 'Cyber Security - Sigmix Labs',
        'breadcrumb'   => 'Cyber Security',
        'heading'      => 'Cyber <span>Security.</span>',
        'pageH1'       => 'Enterprise-grade cybersecurity solutions to protect your digital assets and reputation.',
        'description'  => 'In today\'s evolving threat landscape, robust cybersecurity is non-negotiable. Sigmix Labs provides comprehensive security solutions to protect your infrastructure, applications, and data from sophisticated cyber threats. Our certified security professionals employ industry-leading practices and advanced tools to build resilient defences, ensure compliance, and respond swiftly to incidents.',
        'features'     => ['Penetration Testing', 'Security Audits & Assessments', 'Threat Monitoring (24/7)', 'Incident Response', 'Compliance Management', 'Security Awareness Training'],
        'faq' => [
            ['q' => 'What cybersecurity services do you offer?',               'a' => 'We offer vulnerability assessments, penetration testing, SOC-as-a-service, SIEM implementation, incident response, and compliance consulting for GDPR, ISO 27001, PCI DSS, and more.'],
            ['q' => 'How do you assess our security posture?',                 'a' => 'We conduct a comprehensive threat assessment covering network infrastructure, applications, endpoints, and human factors — including automated scanning and manual testing.'],
            ['q' => 'Do you help with regulatory compliance?',                 'a' => 'Yes. We help organisations achieve and maintain compliance with GDPR, ISO 27001, PCI DSS, HIPAA, SOC 2, and other international security frameworks.'],
            ['q' => 'What happens if we experience a security breach?',        'a' => 'Our incident response team is available 24/7. We follow a structured process — containment, eradication, recovery, and root cause analysis — to minimise damage and prevent recurrence.'],
            ['q' => 'How often should we conduct security assessments?',       'a' => 'We recommend quarterly vulnerability scans, annual penetration tests, and continuous monitoring. High-risk environments may require more frequent assessments.'],
        ],
        'process' => [
            ['step' => '01', 'title' => 'Security Assessment',        'desc' => 'Thorough evaluation of your attack surface, existing controls, and security posture to identify vulnerabilities and risk levels.'],
            ['step' => '02', 'title' => 'Threat Modelling',           'desc' => 'Systematic identification of potential threats, attack vectors, and business impact to prioritise remediation efforts.'],
            ['step' => '03', 'title' => 'Defence Implementation',     'desc' => 'Deployment of security controls, tools, and protocols tailored to your environment — firewalls, SIEM, endpoint protection and more.'],
            ['step' => '04', 'title' => 'Monitoring & Detection',     'desc' => '24/7 continuous monitoring using advanced analytics and threat intelligence to detect suspicious activities in real time.'],
            ['step' => '05', 'title' => 'Response & Review',          'desc' => 'Structured incident response with post-event analysis, lessons learned, and ongoing improvement of your security programme.'],
        ],
        'featureTitle' => 'Cyber Security <span>Service Capabilities.</span>',
        'featureItems' => [
            ['icon' => 0, 'title' => 'Vulnerability Assessment & PenTest', 'desc' => 'Systematic identification and ethical exploitation of security weaknesses across networks, applications, and infrastructure to expose real-world risks.'],
            ['icon' => 1, 'title' => 'Security Operations Centre (SOC)',   'desc' => '24/7 monitoring with expert analysts and AI-driven threat detection to identify, analyse, and respond to security incidents in real time.'],
            ['icon' => 2, 'title' => 'Compliance & Governance',            'desc' => 'Helping organisations achieve and maintain compliance with GDPR, ISO 27001, PCI DSS, HIPAA, and other industry security regulations.'],
            ['icon' => 3, 'title' => 'Incident Response & Recovery',       'desc' => 'Rapid, structured response to security breaches — containment, forensic investigation, eradication, recovery, and preventive controls.'],
        ],
        'toolsTitle' => 'Our Security <span>Tools & Platforms.</span>',
        'tools' => [
            ['icon' => 'vs-icon.svg',     'name' => 'SIEM Platforms'],
            ['icon' => 'aws-icon.svg',    'name' => 'AWS Security'],
            ['icon' => 'git-icon.svg',    'name' => 'Threat Intel'],
            ['icon' => 'mysql-icon.svg',  'name' => 'DB Security'],
            ['icon' => 'gitlab-icon.svg', 'name' => 'DevSecOps'],
            ['icon' => 'react-icon.svg',  'name' => 'EDR Platform'],
        ],
    ],
];

$s = $services[$slug];
@endphp

@section('title', $s['title'])
@section('nav-services', 'active')

@section('content')

    <!-- Start Breadcrumb section -->
    <div class="breadcrumb-section" style="background-image: url({{ asset('assets/theme/img/innerpage/breadcrumb-bg1.png') }}), linear-gradient(180deg, #121212 0%, #121212 100%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-wrapper">
                        <div class="banner-content">
                            <ul class="breadcrumb-list">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li>{{ $s['breadcrumb'] }}</li>
                            </ul>
                            <h1>{{ $s['pageH1'] }}</h1>
                        </div>
                        <div class="scroll-down-btn">
                            <a href="#service-details-section">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="29" viewBox="0 0 19 29">
                                    <path d="M9.5 0V28M9.5 28C10 24.3333 12.4 17.1 18 17.5M9.5 28C8.5 24.1667 5.4 16.7 1 17.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb section -->

    <!-- Start Service Details Section -->
    <div class="service-details-page pt-120 mb-120" id="service-details-section">
        <div class="container">

            {{-- Top area: overview + key features + image --}}
            <div class="service-details-top-area mb-80">
                <div class="row g-lg-4 gy-5 align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="service-details-top-content">
                            <h2>{!! $s['heading'] !!}</h2>
                            <p>{{ $s['description'] }}</p>
                            <ul class="key-features">
                                @foreach($s['features'] as $feature)
                                <li>
                                    {!! $star15 !!}
                                    {{ $feature }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1 wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="service-details-img">
                            <img src="{{ asset('assets/theme/img/innerpage/service-details-feature-img.jpg') }}" alt="{{ $s['breadcrumb'] }}">
                        </div>
                    </div>
                </div>
            </div>

            {{-- FAQ accordion --}}
            <div class="service-details-faq-area wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="row g-lg-4 gy-5 align-items-xl-center">
                    <div class="col-lg-6">
                        <div class="service-details-faq-img">
                            <img src="{{ asset('assets/theme/img/innerpage/service-details-faq-img.jpg') }}" alt="FAQ">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="accordion" id="accordionServiceFaq">
                                @foreach($s['faq'] as $i => $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeading{{ $i }}">
                                        <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faqCollapse{{ $i }}"
                                            aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                            aria-controls="faqCollapse{{ $i }}">
                                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}. {{ $item['q'] }}
                                        </button>
                                    </h2>
                                    <div id="faqCollapse{{ $i }}"
                                         class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                         aria-labelledby="faqHeading{{ $i }}"
                                         data-bs-parent="#accordionServiceFaq">
                                        <div class="accordion-body">{{ $item['a'] }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Service Details Section -->

    <!-- Start Working Process Section -->
    <div class="home2-process-section two mb-120">
        <div class="container">
            <div class="section-title5 text-center mb-70 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <span class="sub-title5 two">
                    {!! $star14 !!}
                    Working Process
                    {!! $star14 !!}
                </span>
                <h2>How We <span>Deliver Results.</span></h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="process-slider-area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper home2-process-slider">
                            <div class="swiper-wrapper">
                                @foreach($s['process'] as $i => $step)
                                <div class="swiper-slide wow animate fadeInDown" data-wow-delay="{{ ($i + 1) * 200 }}ms" data-wow-duration="1500ms">
                                    <div class="single-process">
                                        <div class="step">
                                            <div class="number">
                                                <h6>Step</h6>
                                                <span>{{ $step['step'] }}</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h4>{{ $step['title'] }}</h4>
                                            <p>{{ $step['desc'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="slider-btn-area">
                            <div class="slider-btn home2-process-prev">
                                <i class="bi bi-arrow-left"></i>
                            </div>
                            <div class="content">
                                <p>Our Proven Approach</p>
                            </div>
                            <div class="slider-btn home2-process-next">
                                <i class="bi bi-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Working Process Section -->

    <!-- Start Service Features Section -->
    <div class="service-details-feature-section mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title5 mb-70 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <span class="sub-title5 two">
                            {!! $star14 !!}
                            Service Features
                            {!! $star14 !!}
                        </span>
                        <h2>{!! $s['featureTitle'] !!}</h2>
                        <p>We deliver end-to-end expertise so your projects run smoothly, securely, and at full speed from day one through to long-term success.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="service-feature-list">
                        @foreach($s['featureItems'] as $i => $feat)
                        <li class="single-feature wow animate fadeInDown" data-wow-delay="{{ ($i + 1) * 200 }}ms" data-wow-duration="1500ms">
                            <div class="icon">
                                {!! $fi[$feat['icon']] !!}
                            </div>
                            <div class="content">
                                <h5>{{ $feat['title'] }}</h5>
                                <p>{{ $feat['desc'] }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Features Section -->

    <!-- Start Tools Section -->
    <div class="service-details-tools-section mb-120">
        <div class="container">
            <div class="row mb-60">
                <div class="col-lg-12 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="section-title5">
                        <span class="sub-title5 two">
                            {!! $star14 !!}
                            Our Tools
                            {!! $star14 !!}
                        </span>
                        <h2>{!! $s['toolsTitle'] !!}</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach($s['tools'] as $i => $tool)
                @php $delays = [200,300,400,500,600,700,700,600,500,400,300,200,200]; @endphp
                <div class="col-lg-2 col-md-3 col-sm-4 wow animate fadeInDown" data-wow-delay="{{ $delays[$i] ?? 200 }}ms" data-wow-duration="1500ms">
                    <div class="tools-card">
                        <div class="tools-icon">
                            <img src="{{ asset('assets/theme/img/innerpage/icon/' . $tool['icon']) }}" alt="{{ $tool['name'] }}">
                        </div>
                        <div class="tools-name">
                            <span>{{ $tool['name'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Tools Section -->

    <!-- Start Contact section -->
    <div class="contact-section">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-5">
                    <div class="contact-content">
                        <div class="section-title white wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="500ms">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><g><path d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z"/></g></svg>
                                Drop Us a Line
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><g><path d="M6.6304 0.338424C6.67018 -0.112811 7.32982 -0.112807 7.3696 0.338428L7.72654 4.38625C7.75291 4.68505 8.10454 4.83069 8.33443 4.63804L11.4491 2.02821C11.7963 1.73728 12.2627 2.20368 11.9718 2.55089L9.36197 5.66556C9.1693 5.89546 9.31496 6.24709 9.61374 6.27346L13.6615 6.6304C14.1128 6.67018 14.1128 7.32982 13.6615 7.3696L9.61374 7.72654C9.31496 7.75291 9.1693 8.10454 9.36197 8.33443L11.9718 11.4491C12.2627 11.7963 11.7963 12.2627 11.4491 11.9718L8.33443 9.36197C8.10454 9.1693 7.75291 9.31496 7.72654 9.61374L7.3696 13.6615C7.32982 14.1128 6.67018 14.1128 6.6304 13.6615L6.27346 9.61374C6.24709 9.31496 5.89546 9.1693 5.66556 9.36197L2.55089 11.9718C2.20368 12.2627 1.73729 11.7963 2.02822 11.4491L4.63804 8.33443C4.83069 8.10454 4.68504 7.75291 4.38625 7.72654L0.338424 7.3696C-0.112811 7.32982 -0.112807 6.67018 0.338428 6.6304L4.38625 6.27346C4.68505 6.24709 4.83069 5.89546 4.63804 5.66556L2.02821 2.55089C1.73728 2.20368 2.20368 1.73729 2.55089 2.02822L5.66556 4.63804C5.89546 4.83069 6.24709 4.68504 6.27346 4.38625L6.6304 0.338424Z"/></g></svg>
                            </span>
                            <h2>Connect with Sigmix Labs</h2>
                            <p>Ready to take the first step towards unlocking opportunities, realizing goals, and embracing innovation? We're here and eager to connect.</p>
                        </div>
                        <div class="contact-area wow animate fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <div class="hotline-area mb-40">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"><path d="M27.2653 21.5995L21.598 17.8201C20.8788 17.3443 19.9147 17.5009 19.383 18.1798L17.7322 20.3024C17.6296 20.4377 17.4816 20.5314 17.3154 20.5664C17.1492 20.6014 16.9759 20.5752 16.8275 20.4928L16.5134 20.3196C15.4725 19.7522 14.1772 19.0458 11.5675 16.4352C8.95784 13.8246 8.25001 12.5284 7.6826 11.4893L7.51042 11.1753C7.42683 11.0269 7.39968 10.8532 7.43398 10.6864C7.46827 10.5195 7.56169 10.3707 7.69704 10.2673L9.81816 8.61693C10.4968 8.08517 10.6536 7.1214 10.1784 6.40198L6.39895 0.734676C5.91192 0.00208106 4.9348 -0.21784 4.18082 0.235398L1.81096 1.65898C1.06634 2.09672 0.520053 2.80571 0.286612 3.63733C-0.56677 6.74673 0.0752209 12.1131 7.98033 20.0191C14.2687 26.307 18.9501 27.9979 22.1677 27.9979C22.9083 28.0011 23.6459 27.9048 24.3608 27.7115C25.1925 27.4783 25.9016 26.932 26.3391 26.1871L27.7641 23.8187C28.218 23.0645 27.9982 22.0868 27.2653 21.5995Z"/></svg>
                                </div>
                                <div class="content">
                                    <span>To More Inquiry</span>
                                    <h6><a href="tel:+923034969407">0303 496 9407</a></h6>
                                </div>
                            </div>
                            <div class="hotline-area">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"><path d="M24.6996 26.0015H1.29998C0.955309 26.0011 0.624854 25.864 0.381135 25.6203C0.137416 25.3766 0.000344239 25.0462 8.47364e-08 24.7015V8.66841C-5.14206e-05 8.58603 0.023378 8.50535 0.0675423 8.43581C0.111707 8.36628 0.174776 8.31077 0.249359 8.2758C0.323942 8.24083 0.406948 8.22784 0.488649 8.23836C0.57035 8.24887 0.647361 8.28246 0.710655 8.33518L11.3428 17.1716C11.8091 17.5569 12.3952 17.7677 13.0002 17.7677C13.6052 17.7677 14.1913 17.5569 14.6577 17.1716L25.2889 8.33474C25.3523 8.282 25.4293 8.24841 25.511 8.23791C25.5928 8.22741 25.6758 8.24043 25.7504 8.27546C25.825 8.31048 25.8881 8.36605 25.9322 8.43565C25.9763 8.50525 25.9997 8.58599 25.9996 8.66841V24.7015C25.9992 25.0462 25.8622 25.3766 25.6184 25.6203C25.3747 25.864 25.0443 26.0011 24.6996 26.0015ZM0.866653 9.59183V24.7015C0.866653 24.9407 1.06078 25.1348 1.29998 25.1348H24.6996C24.8145 25.1348 24.9247 25.0892 25.006 25.0079C25.0873 24.9266 25.1329 24.8164 25.1329 24.7015V9.59183L15.2106 17.838C14.5887 18.352 13.807 18.6333 13.0002 18.6335C12.1933 18.6336 11.4116 18.3527 10.7894 17.8389L0.866653 9.59183Z"/></svg>
                                </div>
                                <div class="content">
                                    <span>To Send Mail</span>
                                    <h6><a href="mailto:info@sigmixlabs.com">info@sigmixlabs.com</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="social-area wow animate fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <h6>Social — Just Stay Connected!</h6>
                            <ul class="social-list">
                                <li>
                                    <a href="https://www.linkedin.com/">
                                        <i class="bi bi-linkedin"></i>
                                        <span>LinkedIn</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <i class="bi bi-facebook"></i>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/></svg>
                                        <span>Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/">
                                        <i class="bi bi-instagram"></i>
                                        <span>Instagram</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="contact-form-wrap">
                        <div class="contact-form-area">
                            <h3>Your Success Starts Here!</h3>
                            <form action="{{ route('contact') }}" method="GET">
                                <div class="row">
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Full Name *</label>
                                            <input type="text" name="name" placeholder="John Doe">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Company / Organization *</label>
                                            <input type="text" name="company" placeholder="Acme Inc.">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Phone *</label>
                                            <input type="text" name="phone" placeholder="+1 000 000 0000">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <div class="form-inner">
                                            <label>Company Email *</label>
                                            <input type="email" name="email" placeholder="you@company.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-20">
                                        <div class="form-inner">
                                            <label>Your Subject *</label>
                                            <input type="text" name="subject" placeholder="How can we help?">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <div class="form-inner">
                                            <label>Message *</label>
                                            <textarea name="message" placeholder="Tell us about your project..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-inner">
                                            <button class="primary-btn2" type="submit" data-text="Submit Now"><span>Submit Now</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact section -->

@endsection
