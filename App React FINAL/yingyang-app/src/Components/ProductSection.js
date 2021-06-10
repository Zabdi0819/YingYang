import React from 'react';
import {Grid, makeStyles} from '@material-ui/core';
import MediaCard from './MediaCard';

const useStyles = makeStyles ({
	root: {
		flexGrow: 1,
	},
	paper: {
		textAlgin: 'center',
		color: 'black',
	}, 
});

const ProductSection = () => {
	const classes = useStyles();
	return (
		<div className={classes.root}>
			<h2 className={classes.paper}>Productos</h2>
			<p className={classes.paper}>Tenemos una gran variedad de productos para damas que van desde prendas hasta maquillaje variado, consulte las publicaciones originales para más detalles</p>
			<Grid container spacing={3}>
				<Grid container cellHeight={450} item xs={12} spacing={3}>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto1.jpeg'} height={140} />	
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto2.jpeg'} height={140} />
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto3.jpeg'} height={140} />
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto4.jpeg'} height={140} />
					</Grid>
				</Grid>
				<Grid cellHeight={450} container item xs={12} spacing={3}>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto5.jpeg'} height={140} />	
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto6.jpeg'} height={140} />
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto7.jpeg'} height={140} />
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto8.jpeg'} height={140} />
					</Grid>
				</Grid>
				<Grid cellHeight={450} container item xs={12} spacing={3}>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto9.jpeg'} height={140} />	
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto10.jpeg'} height={140} />
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto11.jpeg'} height={140} />
					</Grid>
					<Grid item xs={12} sm={6} md={3}>
						<MediaCard src={'img/Producto12.jpeg'} height={140} />
					</Grid>
				</Grid>	
			</Grid>
		</div>
	)
}
export default ProductSection;