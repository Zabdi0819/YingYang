import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import MediaCard from './MediaCard';

const useStyles = makeStyles ({


});

const Slides = (props) => {
	const classes = useStyles();
	return (
		<div>
			<MediaCard src={'img/Slide1.jpg'} height={400} />
		</div>
	)
}
export default Slides;