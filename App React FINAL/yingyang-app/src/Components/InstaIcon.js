import React from 'react';
import InstagramIcon from '@material-ui/icons/Instagram';
import {makeStyles} from '@material-ui/core/styles/makeStyles';

const InstaIcon = (props) => {
	return (
		<a href={'https://www.instagram.com/styleetbeaute2021/?hl=es-la'} target={'_blank'}>
			<InstagramIcon className={props.className}/>
		</a>
	)
}
export default InstaIcon;