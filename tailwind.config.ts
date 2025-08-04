import type { Config } from 'tailwindcss';

const config: Config = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.ts',
        './resources/**/*.vue',
        '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        '../../storage/framework/views/*.php',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};

export default config;
