module.exports = {
	plugins: {
		'post-css-import': {},
		'postcss-preset-env': {
			stage: 0,
			autoprefixer: {
				grid: true,
			},
			browsers: 'last 2 versions',
		},
	},
};
