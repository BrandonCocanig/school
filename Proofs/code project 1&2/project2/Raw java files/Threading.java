import java.util.concurrent.*;

public class Threading {
	public static void main(String[] args) {
		System.out.println("I am thread: " + Thread.currentThread().getName());

		Thread screenUpdater = new Thread(new ScreenUpdater());
		Thread uiHandler = new Thread(new UIHandler());

		try {
			uiHandler.start();
			screenUpdater.start();

			uiHandler.join();
			screenUpdater.join();
		} catch (InterruptedException ie) {}
	}
}