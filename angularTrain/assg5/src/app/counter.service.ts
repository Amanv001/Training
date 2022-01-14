export class CounterService{
    activeToInacvtiveCounter = 0;
    inactiveToActiveCounter  = 0;

    incrementActiveToInactive(){
        this.activeToInacvtiveCounter++;
        console.log('Active To Inactive '+this.activeToInacvtiveCounter);
    }

    incrementInactiveToActiveCounter(){
        this.inactiveToActiveCounter++;
        console.log('Active To Inactive '+this.inactiveToActiveCounter);
    }
    
}