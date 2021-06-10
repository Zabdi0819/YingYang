import React from 'react';
import Logo from './Logo';
import {Link, Grid, makeStyles, Hidden, Box} from '@material-ui/core';

const useStyles = makeStyles({
	root:{
		flexGrow:1
	},
	menu:{
		alignItems: 'flex-end',
		textAlign: 'right'
	},
	item:{
		paddingLeft: 10
	}
})

const NavBar = (props) => {
	const classes = useStyles();
	return (
	<div> 
		<Grid container spacing={1}>
			<Grid item xs={4}>
				<Logo systemName={props.systemName}/>
			</Grid>
			<Grid item xs={8} className={classes.menu}>
				<Box p={2}>
				<Hidden smUp>
					<Box>MENU</Box>
				</Hidden>
				<Hidden xsDown>
				<Link className={classes.item} component="button" variant="body2" underline={'none'}>
					Inicio |
				</Link>
				<Link className={classes.item} component="button" variant="body2" underline={'none'}>
					Productos |
				</Link>
				<Link className={classes.item} component="button" variant="body2" underline={'none'}>
					Politicas de la tienda |
				</Link>
				<Link className={classes.item} component="button" variant="body2" underline={'none'}>
					Quiénes somos |
				</Link>
				<Link className={classes.item} component="button" variant="body2" underline={'none'}>
					Foro 
				</Link>
				</Hidden>
				</Box>
			</Grid>
		</Grid>
	</div>
	)
};

export default NavBar;