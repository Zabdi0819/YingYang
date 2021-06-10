import React from 'react';
import {Grid, makeStyles} from '@material-ui/core';
import MediaCard from './MediaCard';

const useStyles = makeStyles ({
	root:{
		marginTop: 20
	}
})

const BannerTop = (props) => {
	const classes = useStyles();
	return (
		<div className={classes.root}>
			<Grid container spacing={3} >
				<Grid item xs={12} sm={4}>
					<MediaCard src={'img/Slide2.jpg'} height={140}/>
				</Grid>
				<Grid item xs={12} sm={4}>
					<MediaCard src={'img/Slide3.jpg'} height={140}/>
				</Grid>
				<Grid item xs={12} sm={4}>
					<MediaCard src={'img/Slide4.jpg'} height={140}/>
				</Grid>
			</Grid>
		</div>
	)
}
export default BannerTop;