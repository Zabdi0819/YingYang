import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import GridList from '@material-ui/core/GridList';
import GridListTile from '@material-ui/core/GridListTile';

const useStyles = makeStyles((theme) => ({
  root: {
    display: 'flex',
    flexWrap: 'wrap',
    justifyContent: 'space-around',
    overflow: 'hidden',
    backgroundColor: theme.palette.background.paper,
  },
  gridList: {
    width: '100%',
    height: 800,
  },
  paper: {
    color: 'black',
  },
  paper2: {
    color: 'black',
    marginTop: -5
  }
}));

const GallertSection = () => {
  const classes = useStyles();

  return (
    <div className={classes.root}>
      <h2 className={classes.paper}>Colaboradores</h2>
      <GridList cellHeight={450} className={classes.gridList} cols={3}>
          <GridListTile key={'x'} cols={1}>
            <img src={'img/ZAB.png'} alt={'Example'} />
          </GridListTile>
          <GridListTile key={'x'} cols={1}>
            <img src={'img/Ximena.jpg'} alt={'Example'} />
          </GridListTile>
          <GridListTile key={'x'} cols={1}>
            <img src={'img/ALAN.png'} alt={'Example'} />
          </GridListTile>
          <GridListTile key={'x'} cols={1}>
            <p className={classes.paper2}>Zabdi Zurisadai</p>
          </GridListTile>
          <GridListTile key={'x'} cols={1}>
            <p className={classes.paper2}>Ximena Velasco</p>
          </GridListTile>
          <GridListTile key={'x'} cols={1}>
            <p className={classes.paper2}>Sergio Alan</p>
          </GridListTile>
      </GridList>  
    </div>
  );
}
export default GallertSection;