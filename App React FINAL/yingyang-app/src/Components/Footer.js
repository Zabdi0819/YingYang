import React from 'react';
import {Grid, makeStyles, Box} from "@material-ui/core";
import Logo from './Logo';
import FaceIcon from './FaceIcon';
import InstaIcon from './InstaIcon';

const useStyles = makeStyles({
	root:{
		backgroundColor:'#d5acf3',
		color:'#ffffff',
		fontSize: '20px',
		paddingTop:20,
	},
	icon:{
		fontSize:'28px',
		color: '#ffffff',
		position: 'relative',
		float: 'right',
		top:-22,
		right:6,
	},
	paper: {
		color: 'black',
	}
})

const Footer = () => {
	const classes = useStyles()
	return (
		<div className={classes.root}>
			<Grid container spacing={3}>
				<Grid item xs={12} sm={4}>
					<Logo/>
				</Grid>
				<Grid item xs={12} sm={8}>
					<Box className={classes.paper} p={4}>En StyleEtBeauté es importante laborar en un ambiente de total armonía y confianza. Somos estudiantes de la carrera de Tecnologías en la Información y Comunicaciones del TecNM Campus Aguascalientes.</Box>
				</Grid>
			</Grid>
			<FaceIcon className={classes.icon}/>
			<InstaIcon className={classes.icon}/>
		</div>
		)
}
export default Footer;